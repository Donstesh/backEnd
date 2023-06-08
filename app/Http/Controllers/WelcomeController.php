<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Advert;
use App\Models\Game_film;
use App\Models\License;
use App\Models\Service;
use App\Models\SongwritersSection;
use App\Models\Sync;
use App\Models\Whatwedo;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game_films = Game_film::paginate(5);
        $abouts = About::get();
        $services = Service::paginate(5);
        $license = License::get();
        $syncs = Sync::get();
        $adverts = Advert::get();
        $songwritersections = SongwritersSection::get();
        $gamesandfilmssection = Game_film::get();
        $wwds = Whatwedo::get();

        return view('welcome', compact('game_films', 'abouts','services', 'license', 'syncs', 'adverts', 'songwritersections', 'gamesandfilmssection', 'wwds'));
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
        //
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
        //
    }
}
