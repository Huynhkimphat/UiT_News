<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Type;

class GuestController extends Controller
{
    //
    public function loadpostall()
    {
        $latestPosts = Post::latest()->take(3)->get(); //lấy 3 post mới nhất
        $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        //  dd($latestPosts,$post_1,$topView);
        $post_sk = Post::where('POST_TYPE_ID', 12)->take(3)->orderByDesc('updated_at')->get();
        $post_tt = Post::where('POST_TYPE_ID', 11)->take(4)->orderByDesc('updated_at')->get();
        // dd($post_sk);
        return view('home', compact('latestPosts', 'topView', 'post_sk', 'post_tt'));
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
        //  dd($post);
        return view("home.postdetail", compact('post', 'post_sk', 'post_related'));
    }


    public function getpost($nametype)
    {

        $type = Type::where('slug', $nametype)->first();
        $posts = Post::where('POST_TYPE_ID', $type->id)->orderBy('created_at', 'desc')->get();

        return view('home.typepost', compact('posts', 'type'));
    }

    public function Search(Request $request)
    {
        $key_form = $request->key;
        $key = str_replace(' ', '%', $key_form);
        $posts = Post::where('POST_TITLE', 'LIKE', '%' . $key . '%')->get();
        return view('home.search', compact('key_form', 'posts'));
    }
}
