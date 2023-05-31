<?php

use App\Http\Controllers\AboutController;
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
Route::get('/hero', [App\Http\Controllers\HomeController::class, 'hero'])->name('hero');
Route::get('/whatwedo', [App\Http\Controllers\HomeController::class, 'whatwedo'])->name('whatwedo');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
//Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/license', [App\Http\Controllers\HomeController::class, 'license'])->name('license');
Route::get('/sync', [App\Http\Controllers\HomeController::class, 'sync'])->name('sync');
Route::get('/songs', [App\Http\Controllers\HomeController::class, 'songs'])->name('songs');
Route::get('/advert', [App\Http\Controllers\HomeController::class, 'advert'])->name('advert');
Route::get('/gamesandfilms', [App\Http\Controllers\HomeController::class, 'gamesandfilms'])->name('gamesandfilms');
Route::get('/footer', [App\Http\Controllers\HomeController::class, 'footer'])->name('footer');

Route::resource('about', App\Http\Controllers\AboutController::class);

Route::post('/update', [App\Http\Controllers\AboutController::class, 'update']);
// Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

