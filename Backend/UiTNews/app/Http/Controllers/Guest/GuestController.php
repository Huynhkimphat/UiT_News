<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use App\Http\Resources\VideosResource;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
class GuestController extends Controller
{
    //
    public function loadpostall()
    {
        $latestPosts = Post::latest()->take(3)->get();
        $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        $post_sk = Post::where('POST_TYPE_ID', 12)->take(3)->orderByDesc('updated_at')->get();
        $post_tt = Post::where('POST_TYPE_ID', 11)->take(4)->orderByDesc('updated_at')->get();
        $user=Auth::user();
        $latestVideos = Video::latest()->take(3)->get();
        $latestVideosMore = Video::latest()->skip(3)->take(2)->get();
        return view('home', compact('latestPosts', 'topView', 'post_sk', 'post_tt','user','latestVideos','latestVideosMore'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        $post->POST_VIEW += 1;
        $post->save();
        $post_sk = Post::where('POST_TYPE_ID', 12)->take(3)->orderByDesc('updated_at')->get();
        $post_related = Post::where('POST_TYPE_ID', $post->POST_TYPE_ID)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();
        return view("postdetail", compact('post', 'post_sk', 'post_related'));
    }


    public function getpost($nametype)
    {

        $type = Type::where('slug', $nametype)->first();
        $posts = Post::where('POST_TYPE_ID', $type->id)->orderBy('created_at', 'desc')->get();

        return view('typepost', compact('posts', 'type'));
    }

    public function Search(Request $request)
    {
        $key_form = $request->key;
        $key = str_replace(' ', '%', $key_form);
        $posts = Post::where('POST_TITLE', 'LIKE', '%' . $key . '%')->get();
        return view('search', compact('key_form', 'posts'));
    }
}
