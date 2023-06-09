<?php

namespace App\Http\Controllers;

use App\Models\Game_film;
use Illuminate\Http\Request;

class GamesandFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game_films = Game_film::get();
        return view('gamesandfilm.index', compact('game_films'));
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
    public function edit($id)
    {
        $game_film = Game_film::find($id);
        return view('gamesandfilm.edit',compact('game_film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game_film $gamef, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        $gamef = Game_film::find($id);
        $gamef->title = $request->input('title');
        $gamef->desc = $request->input('desc');
        $gamef->save();

        return redirect()->route('gamesandfilm.index')->with('success','Record Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game_film = Game_film::findOrFail($id);
        $game_film->delete();
        return back();
    }
}
