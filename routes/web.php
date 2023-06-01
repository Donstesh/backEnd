<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\SongWrittersController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/topnav', [App\Http\Controllers\HomeController::class, 'topnav'])->name('topnav');
Route::get('/nav', [App\Http\Controllers\HomeController::class, 'nav'])->name('nav');
//Route::get('/hero', [App\Http\Controllers\HomeController::class, 'hero'])->name('hero');
//Route::get('/whatwedo', [App\Http\Controllers\HomeController::class, 'whatwedo'])->name('whatwedo');
//Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
//Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/license', [App\Http\Controllers\HomeController::class, 'license'])->name('license');
Route::get('/sync', [App\Http\Controllers\HomeController::class, 'sync'])->name('sync');
Route::get('/songs', [App\Http\Controllers\HomeController::class, 'songs'])->name('songs');
//Route::get('/advert', [App\Http\Controllers\HomeController::class, 'advert'])->name('advert');
Route::get('/gamesandfilms', [App\Http\Controllers\HomeController::class, 'gamesandfilms'])->name('gamesandfilms');
Route::get('/footer', [App\Http\Controllers\HomeController::class, 'footer'])->name('footer');

Route::resource('about', App\Http\Controllers\AboutController::class);
Route::resource('whatwedo', App\Http\Controllers\WhatwedoController::class);
Route::resource('advert', App\Http\Controllers\AdvertController::class);
Route::resource('songwritters', App\Http\Controllers\SongWrittersController::class);
Route::resource('service', App\Http\Controllers\ServiceController::class);
Route::resource('hero', App\Http\Controllers\HeroController::class);

// Route::post('/about', [App\Http\Controllers\AboutController::class, 'update']);
// Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');


// INSERT INTO hero_sections (image, title)
// VALUES 
//     ('pic_1','Music Licensing'),
//     ('pic_2','Music Synchronisation'),
//     ('pic_3','Advertising and Media');



// ALTER TABLE `whatwedos`
//   CHANGE COLUMN `desc` `desc` VARCHAR(10000);
