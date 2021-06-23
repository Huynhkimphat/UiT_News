<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\User;
use App\Middleware\Application;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
// -----------------------------load account ------------------------------
Route::get('/account/loadall', function () {
    $users = User::all();
    return response() -> json($users);
});

Route::get('/account/{id}/loaduser',function ($id){
    $user = User::find($id);
    return $user->password;
    return response() -> json($user);
});
Route::get('/account/{id}/update' ,function ($id)
{
  $user = user::find($id);
  $user->name =$_GET["name"];
  $user->email =$_GET["email"];
  $user->password =$_GET["password"];
  $user->save();
});
// -----------------------------role account ------------------------------
Route::get('/account/{id}/isAdmin',function($id){
    $user=User::find($id)->role;
    return $user=='Admin'?true:false;
});
// -----------------------------------------------------------
Auth::routes();
// -----------------------------------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// -----------------------------forget password ------------------------------
Route::get('forget-password',  [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');


