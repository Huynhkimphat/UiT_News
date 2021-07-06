<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TypesController;
use App\Http\Controllers\Guest\GuestController;

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


Route::group(['prefix' => 'admin'], function () {
    Route::resource('types', TypesController::class)->except(['create', 'show']); 
    Route::resource('post', PostsController::class);


});



Route::get('/', [GuestController::class, 'loadpostall']);
Route::get('postdetail/{id}',[GuestController::class,'show'])->name('postdetail.show');
Route::get('types/{nametype}',[GuestController::class,'getpost'])->name('type.getpost');