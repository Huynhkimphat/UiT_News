<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;
use App\Models\User;
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
});
Route::resource('comments', CommentController::class);
Route::get('/token', function () {
    return csrf_token(); 
});

