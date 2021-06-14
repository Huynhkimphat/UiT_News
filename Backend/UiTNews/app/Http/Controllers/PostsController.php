<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestPosts = Post::latest()->take(4)->get();
        $topView = Post::orderByDesc('POST_VIEW')->take(3)->get();
        return view('posts.index', compact('latestPosts', 'topView'));
    }
    public function Loadpostall()
    {
        $posts= Post::all();
        return view('posts.all', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {   
        return view('posts.create');
    }
    public function create()
    {
        $post=new Post;
        $post->POST_TITLE='Title 1';
        $post->POST_CONTENT='Title 12';
        $post->POST_AUTHOR_ID='2';
        $post->POST_ORIGIN='Title 1';
        $post->POST_TYPE_ID=' 12';
        $post->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->POST_TITLE = $request->title;
        $post->POST_CONTENT = $request->body;
        $post->POST_AUTHOR_ID = 1;
        $post->POST_ORIGIN = "title";
        $post->POST_TYPE_ID = "1234";
        $post->save();
        return redirect('posts/Loadpostall');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $post = Post::find($id);
        $post->POST_VIEW += 1;
        $post->save();
        return view("posts.show", [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showeditform($id)
    {
        
    }
    public function edit($id)
    {
        $post = Post::find($id);
        //return view("posts.show",compact ('post'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
