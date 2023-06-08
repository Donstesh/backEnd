<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\SongWrittersController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\GamesandFilmsController;
use App\Http\Controllers\SynchronisationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/topnav', [App\Http\Controllers\HomeController::class, 'topnav'])->name('topnav');
Route::get('/nav', [App\Http\Controllers\HomeController::class, 'nav'])->name('nav');
Route::get('/footer', [App\Http\Controllers\HomeController::class, 'footer'])->name('footer');

Route::resource('about', App\Http\Controllers\AboutController::class);
Route::resource('whatwedo', App\Http\Controllers\WhatwedoController::class);
Route::resource('advert', App\Http\Controllers\AdvertController::class);
Route::resource('songwriter', App\Http\Controllers\SongWrittersController::class);
Route::resource('service', App\Http\Controllers\ServiceController::class);
Route::resource('hero', App\Http\Controllers\HeroController::class);
Route::resource('license', App\Http\Controllers\LicenseController::class);
Route::resource('gamesandfilm', App\Http\Controllers\GamesandFilmsController::class);
Route::resource('sync', App\Http\Controllers\SynchronisationController::class);
Route::resource('songwriterssection', App\Http\Controllers\SongwritersSectionController::class);

// Route::post('/about', [App\Http\Controllers\AboutController::class, 'update']);
// Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');


// INSERT INTO abouts (pic, title, `descption`)
// VALUES 
//     ('pic_2','Capacity.','We currently have over 300 records in catalogue, so are confident we can find new music that fits and suits your next major campaign.'),
//     ('pic3','Expectation.',' We hope you enjoy the music your listening to!');

// INSERT INTO songwriters_sections (title, `description`)
// VALUES ('Song Writters','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old');

// INSERT INTO adverts (title, `desc`)
// VALUES ('Advertising and Media', 'Are you on the hunt for a fresh and unique sound for your next marketing campaign? Look no further. At Spy-da Music Publishing, we boast a diverse catalogue of over 300 records, ensuring we can find the perfect fit for your project or campaign. But that''s not all. If our extensive collection doesn''t hold the precise sound you''re envisioning, we''re fully equipped to create a unique, attention-grabbing soundtrack tailored specifically for your campaign. For a prompt response, please use the form below. We kindly ask that only business inquiries are submitted. We appreciate your understanding that we are unable to respond to inquiries from the general public at this time. Thank you for considering Spy-da Music Publishing. We look forward to making your campaign sound extraordinary.');


// ALTER TABLE `adverts`
//   CHANGE COLUMN `desc` `desc` VARCHAR(10000);

// ALTER TABLE song_writers
// DROP COLUMN `desc`;
