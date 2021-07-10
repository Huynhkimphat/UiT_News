<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use File;

class PostsController extends Controller
{
    private $path = "/file/post/";


    public function Home()
    {
        return redirect()->route('posts.index');
    }

    public function index()
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $posts = Post::with('types')->get();
            return view('admin.post.all', compact('posts'));
        }
        return redirect('/');
    }


    public function create()
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $types = Type::all();
            return view('admin.post.create', compact('types'));
        }
        return redirect('/');
    }
    public function store(Request $request)
    {
        $file = $request->file('POST_IMAGE');
        $duoifile = $file->getClientOriginalExtension();
        $filename = Str::random(10) . "." . $duoifile;
        $post = $request->all();
        $post['POST_IMAGE'] = $filename;
        // return $post;
        Post::create($post);
        $file->move($this->path, $filename);
        return $this->Home();
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $types = Type::all();
        $post = Post::find($id);
        return view('admin.post.edit', compact('post', 'types'));
    }


    public function update(Request $request, $id)
    {
        $post = $request->all();
        $file = $request->file('POST_IMAGE');
        if (isset($file)) //co file
        {
            $duoifile = $file->getClientOriginalExtension();
            $filename = Str::random(10) . "." . $duoifile;
            $post['POST_IMAGE'] = $filename;
            $file->move($this->path, $filename);
        }
        Post::findOrFail($id)->update($post);
        return $this->Home();
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        File::delete($this->path . $post->POST_IMAGE);
        Post::find($id)->delete();
        return $this->Home();
    }
}
