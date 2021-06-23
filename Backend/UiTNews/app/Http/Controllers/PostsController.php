<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Type;
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
        return view('welcome',compact('posts'));
    }
    public function showeditform()
    {
       // $types=Type::all();
        return view('posts.edit');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {   
        $types=Type::all();
        // return $type;
        return view('posts.create',compact('types'));
    }
    

    public function create()
    {  
        $post=new Post;
        $post->POST_TITLE='Vụ Đàm Vĩnh Hưng dùng tiền cứu trợ miền Trung để sửa chùa: Trụ trì chùa Xuân Long và chính quyền xã nói gì?';
        $post->POST_CONTENT='Mới đây, việc Đàm Vĩnh Hưng dùng tiền cứu trợ miền Trung để đi sửa chùa ở Nghệ An đã gây xôn xao dư luận.

        Vụ Đàm Vĩnh Hưng dùng tiền cứu trợ miền Trung để sửa chùa: Trụ trì chùa Xuân Long và chính quyền xã nói gì? - Ảnh 1.
        Chùa Xuân Long nằm dưới chân núi Đồn
        
        Theo nam ca sĩ chia sẻ: "Hưng có chia sẻ rằng mình sẽ dùng số tiền 140,000,000 đồng trích từ khoản tiền ủng hộ của đồng bào vùng lũ để góp vào tu sửa chùa Xuân Long (Khánh Sơn, Nam Đàn, Nghệ An). Đây là ngôi chùa bị hư hỏng rất nặng trong trận lũ vừa qua, tăng ni trong chùa cũng là những người vùng lũ nên Hưng quyết tâm làm!"
        
        Vụ Đàm Vĩnh Hưng dùng tiền cứu trợ miền Trung để sửa chùa: Trụ trì chùa Xuân Long và chính quyền xã nói gì? - Ảnh 2.
        Lúc đầu chỉ là một ngôi chùa làm bằng tranh, tre, đến năm 1622 thì được xây dựng lại với quy mô lớn
        
        Tuy nhiên sau khi đăng tải, việc làm này nhanh chóng nhận được nhiều ý kiến trái chiều từ cộng đồng mạng. Để tìm hiểu về sự việc, chúng tôi đã tìm về ngôi chùa Xuân Long.
        
        Chùa Xuân Long nằm dưới chân núi Đồn, thuộc làng Đông Sơn, xã Khánh Sơn, huyện Nam Đàn, tỉnh Nghệ An. Trụ trì ngôi chùa là Đại đức Thích Quảng Hiền.
        
        Nói về chuyện này, trụ trì cảm thấy rất buồn: "Tôi cũng mới biết việc này, cũng không nắm rõ nội tình lắm. Việc làm của ca sĩ Đàm Vĩnh Hưng là công đức cho chùa, không ngờ lại có nhiều ý kiến như vậy".
        
        Vụ Đàm Vĩnh Hưng dùng tiền cứu trợ miền Trung để sửa chùa: Trụ trì chùa Xuân Long và chính quyền xã nói gì? - Ảnh 3.
        Phần lớn tượng cổ đang lưu giữ tại chùa (hơn 10 pho) là tượng thánh, thần như Ngọc Hoàng thượng đế, Nam Tào, Bắc Đẩu, thánh nương…
        
        Theo trụ trì, chùa Xuân Long vốn nằm trong vùng đất trũng, những năm trước, cứ đến mùa lụt thì nước ngập đến cổng chùa. Đặc biệt, vào năm ngoái, trận mưa bão đã khiến cho toàn bộ phần mái che đã bị cuốn bay, cùng với việc ngôi Tam bảo của chùa đã xuống cấp nặng.';
        $post->POST_AUTHOR_NAME='Na';
        $post->POST_IMAGE='https://kenh14cdn.com/thumb_w/620/203336854389633024/2021/6/23/3-16244369601301374695903.jpg';
        $post->POST_ORIGIN='1';
        $post->POST_TYPE_ID='12';
        $post->save();
    }
    public function createallpost()
    {  
        $post = [
            [
                // 'id' => 1,
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_IMAGE'=>'https://lh3.googleusercontent.com/proxy/h_ehp33DKbBtrHM3uRe0gk-tusj8ceAWwgWq68Q73V1FZLKlomq-zmQi5p4DbOCFBFrRDoEGTVeFLq84rLyTW6JXD3Id4bbNiluxPaIbUDpz-0k-p1R-UDZQcfunJv6yHWp1sLzWtXXhFCRBU_5bKJ1Ea9vz5rIvHaV1wb19vVY',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => 2,
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_IMAGE'=>'https://lh3.googleusercontent.com/proxy/h_ehp33DKbBtrHM3uRe0gk-tusj8ceAWwgWq68Q73V1FZLKlomq-zmQi5p4DbOCFBFrRDoEGTVeFLq84rLyTW6JXD3Id4bbNiluxPaIbUDpz-0k-p1R-UDZQcfunJv6yHWp1sLzWtXXhFCRBU_5bKJ1Ea9vz5rIvHaV1wb19vVY',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,

            ],
            [
                // 'id' => '3',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_IMAGE'=>'https://lh3.googleusercontent.com/proxy/h_ehp33DKbBtrHM3uRe0gk-tusj8ceAWwgWq68Q73V1FZLKlomq-zmQi5p4DbOCFBFrRDoEGTVeFLq84rLyTW6JXD3Id4bbNiluxPaIbUDpz-0k-p1R-UDZQcfunJv6yHWp1sLzWtXXhFCRBU_5bKJ1Ea9vz5rIvHaV1wb19vVY',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => '4',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_IMAGE'=>'https://lh3.googleusercontent.com/proxy/h_ehp33DKbBtrHM3uRe0gk-tusj8ceAWwgWq68Q73V1FZLKlomq-zmQi5p4DbOCFBFrRDoEGTVeFLq84rLyTW6JXD3Id4bbNiluxPaIbUDpz-0k-p1R-UDZQcfunJv6yHWp1sLzWtXXhFCRBU_5bKJ1Ea9vz5rIvHaV1wb19vVY',
                'POST_TYPE_ID'=>12,
                'POST_VIEW'=>12,
            ],
            [
                // 'id' => '10',
                'POST_TITLE' => 'Dịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt NamDịch Covid ảnh hưởng đến kinh tế Việt Nam',
                'POST_CONTENT' => 'Gây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vựcGây ảnh hưởng nghiêm trọng trên mọi lĩnh vực',
                'POST_AUTHOR_NAME' => 'Na',
                'POST_ORIGIN' => 'VTV1',
                'POST_IMAGE'=>'https://lh3.googleusercontent.com/proxy/h_ehp33DKbBtrHM3uRe0gk-tusj8ceAWwgWq68Q73V1FZLKlomq-zmQi5p4DbOCFBFrRDoEGTVeFLq84rLyTW6JXD3Id4bbNiluxPaIbUDpz-0k-p1R-UDZQcfunJv6yHWp1sLzWtXXhFCRBU_5bKJ1Ea9vz5rIvHaV1wb19vVY',
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
        $post->POST_IMAGE= $request->bodyimage;
        $post->POST_AUTHOR_NAME = 1;
        $post->POST_ORIGIN ="title";
        $post->POST_TYPE_ID =$request->type;
        $post->save();
        return redirect('posts');
    }
    public function showPostByTypes($id){
        // $posts = Post::find($id);
        $posts= Post::where('POST_TYPE_ID',$id)->get();
        return view('posts.all', compact('posts'));
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
    // public function posttype($name)
    // {
    //      $type_id = Type::where('TYPE_NAME', $name);
    //      return Post::find('id'->$type_id);
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {  
        $posts= Post::where('POST_TYPE_ID',$id)->get();
        return view("posts.edit", compact('posts'));
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
        $post->POST_IMAGE= $request->bodyimage;
        $post->POST_AUTHOR_NAME = 1;
        $post->POST_ORIGIN ="title";
        $post->POST_TYPE_ID ="1234";
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
