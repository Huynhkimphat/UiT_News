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
        return view('home.home', compact('latestPosts', 'topView', 'post_sk', 'post_tt'));
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
        # Lấy ra các bài viết theo chuyên mục(slug,ID)
        #Bước 1: lấy ra THÔNG TIN của chuyên mục đó theo slug(khong-dau)===>lấy ID của chuyên mục đó
        //Bước 2: Đã có ID chuyên mục==>lấy bài viết theo ID chuyên mục
        $type = Type::where('slug', $nametype)->first();
        $posts = Post::where('POST_TYPE_ID', $type->id)->orderBy('created_at', 'desc')->get();
        //     dd($type,$posts);
        return view('home.typepost', compact('posts', 'type'));
    }
}
