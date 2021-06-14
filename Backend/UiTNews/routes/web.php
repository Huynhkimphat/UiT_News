<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\User;
use App\Middleware\Application;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

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

Route::get('/account/loadall', function () {
    $users = User::all();
    return $users;
});

Route::get('/account/{id}/loaduser',function ($id){
    $user = User::find($id);
    return $user;
});
Route::get('/account/{id}/update' ,function ($id)
{
  $user = user::find($id);
  $user->name =$_GET["name"];
  $user->email =$_GET["email"];
  $user->password =$_GET["password"];
  $user->save();
});
// Route::get('/UpDate/{id}' ,function ($id)
// {
//   $user = user::find($id);
//   $user->name = User::get('name');
//   $user->email = User::get('email');
//   $user->password = User::get('password');
//   $user-> save();
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

