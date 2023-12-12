<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hafida', function() {
    echo "Saya Siswa RPL";
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/berita', function() {
    return view('berita');
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/data_guru', function() {
    return view('data_guru');
});
Route::get('/data_siswa', function() {
    return view('data_siswa');
});
Route::get('/kuliner', function() {
    return view('kuliner');
});
Route::get('/about', function() {
    return view('about');
});

//Route Untuk User
Route::resource('/users', \App\Http\Controllers\UserController::class);


Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/tampil', [PostController::class,'tampil']);
Route::get('/destination', [DestinationController::class,'destinasi']);
// Route::get('/lihatdestinasi/{id}', [DestinationController::class,'lihatdestinasi']);

Route::get('/tampil/search', [PostController::class, 'search']);

// Route::get('/contact', function() {
//     return view('contact');
// });
// route contact
Route::resource('contact', '\App\Http\Controllers\ContactController')->only(['index']);
Route::post('contact/send', '\App\Http\Controllers\ContactController@sendEmail')->name('contact.send');


Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dasboard', [HomeController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
//Ketika terjadi permintaan POST ke endpoint ini, permintaan akan ditangani oleh metode sendEmail dalam kelas ContactController
