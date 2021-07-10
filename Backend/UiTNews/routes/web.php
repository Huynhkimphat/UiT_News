
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TypesController;
use App\Http\Controllers\Guest\GuestController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

Route::get('/account/loadall', function () {
    $users = User::all();
    return response()->json($users);
});
Route::get('/account/{id}/loaduser', function ($id) {
    $user = User::find($id);
    return $user->password;
    return response()->json($user);
});
Route::get('/account/{id}/update', function ($id) {
    $user = user::find($id);
    $user->name = $_GET["name"];
    $user->email = $_GET["email"];
    $user->password = $_GET["password"];
    $user->save();
});
// -----------------------------role account ------------------------------
Route::get('/account/{id}/isAdmin', function ($id) {
    $user = User::find($id)->role;
    return $user == 'Admin' ? true : false;
});

// Posts
Route::resource('posts', PostsController::class);
//Videos + Post
Route::group(['middleware' => 'web'], function () {
    // Home
    Route::get('/', [App\Http\Controllers\Guest\GuestController::class, 'loadpostall']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('search', [GuestController::class, 'Search'])->name('guest.search');
    Route::get('/dashboard', function () {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $post = Post::all()->count();
            return view('dashboard');
        }
        return  redirect('/');
    });
    // Authenticate
    Auth::routes();

    // Types
    Route::resource('types', TypesController::class)->except(['create', 'show']);
    // Videos
    Route::get('/videos/manageVideos', [VideosController::class, 'manageVideos'])->name('videos.manageVideos');
    Route::resource('/videos', VideosController::class);
    // -----------------------------forget password ------------------------------
    Route::get('forget-password',  [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('forget-password');
    Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');
    // -----------------------------post  ------------------------------
    Route::get('postdetail/{id}', [GuestController::class, 'show'])->name('postdetail.show');
    Route::get('types/{nametype}', [GuestController::class, 'getpost'])->name('type.getpost');
    //--------------------Feedback----------
    Route::post('/message/send', ['uses' => 'App\Http\Controllers\FrontController@addFeedback', 'as' => 'front.fb']);
});
