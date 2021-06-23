<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VideosController;
// use App\Http\Resources\VideosResource;
use App\Models\User;
use App\Models\Video;
use App\Middleware\Application;

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
Route::get('/signup/{id}', function ($id) {
    $user = User::find($id);
    $user->name = 'Yen';
    $user->email = '10@gmail.com';
    $user->password = '12312312312';
    $user->save();
});
Route::get('/login/{email}', function ($email) {
    return User::where('email', $email)->first()->password;
});
Route::get('/login/', function () {
    $users = User::all();
    return $users;
});
Route::group(['middleware' => 'web'], function () {
    Route::resource('/posts', PostsController::class);
    // Route::resource('/videos', VideoController::class);
});

//Videos
Route::group(['middleware' => 'web'], function () {
    Route::get('/videos/createAllVideos',[VideosController::class,'createAllVideos'])->name('videos.createAllVideos');
    Route::resource('/videos', VideosController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
