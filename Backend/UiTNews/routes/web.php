<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TypesController;
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


Route::group(['middleware' => 'web'], function () {
    //Route for Posts
    Route::get('/posts/showcreateform',[PostsController::class,'showCreateform']);
    Route::get('/posts/loadpostall',[PostsController::class,'loadpostall']);
    Route::get('/posts/createallposst',[PostsController::class,'createallposst']);
    Route::resource('/posts', PostsController::class);
      
    //Route for Types
    Route::get('/types/Showcreatetypeform',[TypesController::class,'showCreatetypeform']);
    Route::get('/types/Loadtypeall',[TypesController::class,'Loadtypeall']);
    Route::get('/types/createalltype',[TypesController::class,'createalltype']);
    Route::resource('/types', TypesController::class);

});


