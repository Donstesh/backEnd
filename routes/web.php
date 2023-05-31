<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\AdvertController;
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
//Route::get('/whatwedo', [App\Http\Controllers\HomeController::class, 'whatwedo'])->name('whatwedo');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
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

// Route::post('/about', [App\Http\Controllers\AboutController::class, 'update']);
// Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');


// INSERT INTO whatwedos (title, desc)
// VALUES ('Welcome Business Professionals and Corporate Partners!','In need of a unique sound to elevate your corporate projects or campaigns? Look no further than Spy-da Music Publishing. With a vast selection of over 300 records in our catalogue, we have the resources to find the ideal soundtrack to match your corporate identity and message. Moreover, if you're seeking a sound that's truly one of a kind, we are ready and able to create a bespoke, memorable audio experience specifically tailored to your project or campaign. For an expedited response, please use the form below. We respectfully request that only business-related inquiries are submitted. Please understand that we may not be able to respond to inquiries from the general public at this time. Thank you for considering Spy-da Music Publishing as your audio partner. We look forward to amplifying your corporate presence with the power of sound.');


// ALTER TABLE `whatwedos`
//   CHANGE COLUMN `desc` `desc` VARCHAR(10000);
