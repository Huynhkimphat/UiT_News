<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Post;
use App\Models\Video;
use App\Http\Resources\VideosResource;
use Illuminate\Support\Facades\DB;
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
    {
        $user = Auth::user();
        $latestPosts = Post::latest()->take(3)->get();
        $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        $post_sk = Post::where('POST_TYPE_ID', 12)->take(3)->orderByDesc('updated_at')->get();
        $post_tt = Post::where('POST_TYPE_ID', 11)->take(4)->orderByDesc('updated_at')->get();
        $latestVideos = Video::latest()->take(3)->get();
        $latestVideosMore = Video::latest()->skip(3)->take(2)->get();
        return view('home', compact('latestPosts', 'topView', 'post_sk', 'post_tt', 'user', 'latestVideos', 'latestVideosMore'));
    }
}
