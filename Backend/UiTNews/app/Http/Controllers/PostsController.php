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
        $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        return view('posts.index', compact('latestPosts', 'topView'));
    }
    public function loadpostall()
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
    public function showeditform()
    {   
        return view('posts.edit');
    }
    public function create()
    {  
        
        $post=new Post;
        $post->POST_TITLE='Title 1';
        $post->POST_CONTENT='Content 12';
        $post->POST_AUTHOR_ID='2';
        $post->POST_ORIGIN='Title 1';
        $post->POST_TYPE_ID=' 12';
        $post->save();
    }
    public function createallposst()
    {  
        $post = [
            [
                // 'id' => 1,
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => 2,
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
               'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,

            ],
            [
                // 'id' => '3',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => '4',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => '10',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
        ];
                Post::insert($post);
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
        return redirect('posts');
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
   
    public function edit($id)
    {  
        $post = Post::find($id);
        return view("posts.edit", compact('post'));
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
        
        $post =  Post::find($id);
        $post->POST_TITLE = $request->title;
        $post->POST_CONTENT = $request->body;
        $post->POST_AUTHOR_ID = 1;//mai mốt cũng phải đổi thằng này
        $post->POST_ORIGIN = "title";//này là gì?t k biet no la gi :>> à xuất xứ 
        $post->POST_TYPE_ID = "1234";// 3 cái này vẫn đổi đc bth nhá 
        $post->save();
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
