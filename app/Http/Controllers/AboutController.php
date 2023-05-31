<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $about = About::orderBy('id','desc');
        return view('about', compact('about'));
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\about  $about
    * @return \Illuminate\Http\Response
    */
    public function show(About $about)
    {
        return view('about',compact('about'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\about  $about
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'pic' => 'required',
            'title' => 'required',
            'descption' => 'required',
        ]);
        
        $about->fill($request->post())->save();

        return redirect()->route('about')->with('success','About Has Been updated successfully');
    }
}
