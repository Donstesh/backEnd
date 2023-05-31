<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function topnav()
    {
        return view('topnav');
    }
    public function nav()
    {
        return view('nav');
    }
    public function hero()
    {
        return view('hero');
    }
    public function whatwedo()
    {
        return view('whatwedo');
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function license()
    {
        return view('license');
    }
    public function sync()
    {
        return view('sync');
    }
    public function songs()
    {
        return view('songs');
    }
    public function advert()
    {
        return view('advert');
    }
    public function gamesandfilms()
    {
        return view('gamesandfilms');
    }
    public function footer()
    {
        return view('footer');
    }
}
