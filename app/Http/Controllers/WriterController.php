<?php

namespace App\Http\Controllers;

use App\Models\SongWriter;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songWriters = SongWriter::orderBy('id','desc');
        return view('songwritter.index', compact('songWriters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songwritter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([

    //         'name' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    //         'about' => 'required',
    //         'facebook' => 'required',
    //         'twitter' => 'required',
    //         'instagram' => 'required',
    //     ]);

    //     $writer = new SongWriter();
    //     $imageName = time().'.'.$request->image->extension();

    //     $input = $request->all();
    //     $writer->save(); //persist the data

    //     //SongWriter::create($request->post())->save();
    //     //$songWriter->fill($request->post())->save();

    //     return view('songwriter.index')->with('success','Record Has Been updated successfully');
    // }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'about' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        SongWriter::create($input);
       
        return redirect()->route('songwriter.index')
                        ->with('success','SongWriter created successfully.');
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
    public function edit($id)
    {
        $writer_profile = SongWriter::find($id);
        return view('hero.edit',compact('writer_profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $writer_profile = SongWriter::findOrFail($id);
        $writer_profile->delete();
        return back();
    }
}
