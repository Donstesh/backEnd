<?php

namespace App\Http\Controllers;

use App\Models\SongwritersSection;
use Illuminate\Http\Request;

class SongwritersSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songwriterssections = SongwritersSection::orderBy('id','desc')->paginate(5);
        return view('songwriterssection.index', compact('songwriterssections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SongwritersSection $songwriterssection)
    {
        return view('songwriterssection.edit',compact('songwriterssection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SongwritersSection $songwriterssection)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $songwriterssection->fill($request->post())->save();

        return redirect()->route('songwriterssection.index')->with('success','Record Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}