<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $user=Auth::user();
        $latestPosts = Post::latest()->take(3)->get();
        $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        $post_sk = Post::where('POST_TYPE_ID', 12)->take(3)->orderByDesc('updated_at')->get();
        $post_tt = Post::where('POST_TYPE_ID', 11)->take(4)->orderByDesc('updated_at')->get();
     
        return view('home', compact('latestPosts', 'topView', 'post_sk', 'post_tt','user'));
    }
}
