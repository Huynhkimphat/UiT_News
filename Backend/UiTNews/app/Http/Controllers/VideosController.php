<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Resources\VideosResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Pagination\Paginator;

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
        return view('index')->with('videos', $videos);

        // return view('layouts.app');
        // return view('layouts.footer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageVideos()
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $videos = Video::all();
            return view('manageVideos')->with('videos', $videos);
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            return view('create');
        }
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $video = new Video();

            $query = DB::table('videos')->insert([
                'VIDEO_TITLE' => $request->input('VIDEO_TITLE'),
                'VIDEO_FILE' => $request->input('VIDEO_FILE'),
                'VIDEO_DESCRIPTION' => $request->input('VIDEO_DESCRIPTION'),
                'VIDEO_AUTHOR' => $request->input('VIDEO_AUTHOR'),
                'VIDEO_ORIGIN' => $request->input('VIDEO_ORIGIN'),
                'VIDEO_TYPE' => $request->input('VIDEO_TYPE'),
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
            ]);

            if ($query) {
                return back()->with('success', 'Video have been successfully created');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

            $video->save();
            return redirect('videos/manageVideos');
        }
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        $video->VIDEO_VIEW += 1;
        $video->save();
        $topView = Video::orderByDesc('VIDEO_VIEW')->whereNotIn('id', [$video->id])->get();
        return view("showVideos", compact('video', 'topView'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $video = Video::findOrFail($id);
            return view('edit', compact('video'));
        }
        return redirect('/');
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
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $video = Video::findOrFail($id);
            $video->VIDEO_TITLE = $request->input('VIDEO_TITLE');
            $video->VIDEO_FILE = $request->input('VIDEO_FILE');
            $video->VIDEO_DESCRIPTION = $request->input('VIDEO_DESCRIPTION');
            $video->VIDEO_AUTHOR = $request->input('VIDEO_AUTHOR');
            $video->VIDEO_ORIGIN = $request->input('VIDEO_ORIGIN');
            $video->VIDEO_TYPE = $request->input('VIDEO_TYPE');
            $video->updated_at = $request->updated_at;
            $video->save();
            return redirect('videos/manageVideos');
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userRole = Auth::user()->role;
        if ($userRole == 'admin') {
            $videos = Video::findOrFail($id);
            $videos->delete();
            return redirect('/videos/manageVideos');
        }
        return redirect('/');
    }
}
