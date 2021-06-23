<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Resources\VideosResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        // return $videos;
        return view('index')->with('videos',$videos);

        // $latestPosts = Post::latest()->take(4)->get();
        // $topView = Post::orderByDesc('POST_VIEW')->take(4)->get();
        // return view('posts.index', compact('latestPosts', 'topView'));
    }

    // public function loadpostall()
    // {
    //     $posts= Post::all();
    //     return view('posts.all', compact('posts'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $video = new Video();
        // $video->VIDEO_TITLE = 'Mẫu chuyện đầu tiên';
        // $video->VIDEO_FILE = 'video1.mp4';
        // $video->VIDEO_DESCRIPTION = 'Nhạc của Mai';
        // $video->VIDEO_AUTHOR = 'Chang';
        // $video->VIDEO_ORIGIN = 'YouTube';
        // $video->VIDEO_TYPE_ID = '7';
        

        // $video = new Video();
        // $video->VIDEO_TITLE = 'MVC là gì?';
        // $video->VIDEO_FILE = 'video2.mp4';
        // $video->VIDEO_DESCRIPTION = 'MVC là gì? MVC hoạt động như thế nào?';
        // $video->VIDEO_AUTHOR = 'Duy Anh Web';
        // $video->VIDEO_ORIGIN = 'YouTube';
        // $video->VIDEO_TYPE_ID = '2';

        // if($video->save()){
        //     return new VideosResource($video);
        // }
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAllVideos()
    {  
        $video = [
            [
                // 'id' => 1,
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE_ID'=>12,
                'VIDEO_VIEW'=>10,
            ],
            [
                // 'id' => 2,
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE_ID'=>12,
                'VIDEO_VIEW'=>10,

            ],
            [
                // 'id' => '3',
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE_ID'=>12,
                'VIDEO_VIEW'=>10,
            ],
            [
                // 'id' => '4',
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE_ID'=>12,
                'VIDEO_VIEW'=>10,
            ],
            [
                // 'id' => '12',
                'VIDEO_TITLE' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được',
                'VIDEO_FILE' => 'https://youtu.be/nZ4fGyS6jiM',
                'VIDEO_DESCRIPTION' => 'Cách làm "Trà Sữa" đơn giản nhất, ai cũng làm được | How to make Milk Tea | Lilo Kitchen

                Hôm nay mình sẽ quay lại với món Trà Sữa huyền thoại nhé, đảm bảo xem xong ai cũng có thể làm được, công thức làm siêu siêu dễ, mình chắc chắn sẽ không làm bạn thất vọng đâu. Hãy cùng theo dõi nhé.',
                'VIDEO_AUTHOR' => 'Lilo Kitchen',
                'VIDEO_ORIGIN' => 'Youtube',
                'VIDEO_TYPE_ID'=>12,
                'VIDEO_VIEW'=>10,
            ],
        ];
                Video::insert($video);
                return redirect('videos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();

        // $this->validate($request,[
        //     'VIDEO_TITLE' => 'required',
        //     'VIDEO_FILE' => 'required',
        //     'VIDEO_DESCRIPTION' => 'required',
        //     'VIDEO_AUTHOR' => 'required',
        //     'VIDEO_ORIGIN' => 'required',
        //     'VIDEO_TYPE' => 'required',
        // ]);
            
        $query = DB::table('videos')->insert([
            'VIDEO_TITLE' => $request->input('VIDEO_TITLE'),
            'VIDEO_FILE' => $request->input('VIDEO_FILE'),
            'VIDEO_DESCRIPTION' => $request->input('VIDEO_DESCRIPTION'),
            'VIDEO_AUTHOR' => $request->input('VIDEO_AUTHOR'),
            'VIDEO_ORIGIN' => $request->input('VIDEO_ORIGIN'),
            'VIDEO_TYPE_ID' => $request->input('VIDEO_TYPE_ID'),
        ]);
    
        if($query){
            return back()->with('success', 'Video have been successfuly created');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

        $video->save();
        return redirect('videos');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return $video;
        // $video = Video::find($id);
        // $video->VIDEO_VIEW += 1;
        // $video->save();
        // return view("videos.show", [
        //     'video' => $video,
        // ]);
        // return view('show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $video = Video::findOrFail($id);
    
        return view('edit',compact('video'));
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
        $video = Video::findOrFail($id);

        $video->VIDEO_TITLE = $request->input('VIDEO_TITLE');
        $video->VIDEO_FILE = $request->input('VIDEO_FILE');
        $video->VIDEO_DESCRIPTION = $request->input('VIDEO_DESCRIPTION');
        $video->VIDEO_AUTHOR = $request->input('VIDEO_AUTHOR');
        $video->VIDEO_ORIGIN = $request->input('VIDEO_ORIGIN');
        $video->VIDEO_TYPE_ID = $request->input('VIDEO_TYPE_ID');

        $video->save();
        
        return redirect('videos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $videos=Video::findOrFail($id);

        $videos->delete();
        return redirect('/videos');

    }

}
