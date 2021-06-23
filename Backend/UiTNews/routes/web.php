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
    Route::get('/',[PostsController::class,'loadpostall']);
    Route::get('/posts/posttype',[PostsController::class,'posttype']);
    Route::get('/posts/showcreateform',[PostsController::class,'showCreateForm']);
    Route::get('/posts/showeditform',[PostsController::class,'showeditform']);
    Route::get('/posts/createallpost',[PostsController::class,'createallpost']);
    Route::get('/posts/type/{id}',[PostsController::class,'showPostByTypes']);
    Route::resource('/posts', PostsController::class);
    //Route for Types
    Route::get('/types/showcreatetypeform',[TypesController::class,'showCreatetypeform']);
    Route::get('/types/loadtypeall',[TypesController::class,'Loadtypeall']);
    Route::get('/types/createalltype',[TypesController::class,'createalltype']);
    Route::resource('/types', TypesController::class);

});

