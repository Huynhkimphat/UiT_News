<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiresource('comments', CommentController::class);
Route::post('/reply',[App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.store');
Route::post('/comments/create',[App\Http\Controllers\CommentController::class, 'create'])->name('comment.create');
