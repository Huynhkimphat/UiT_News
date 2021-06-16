<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments=Comment::all()->toJson(JSON_PRETTY_PRINT);;
        return response($comments,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      Comment::create([ "COMMENT_USER_ID" => $request->COMMENT_USER_ID, "COMMENT_POST_ID" => $request->COMMENT_POST_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
      return response()->json([
          "message" => "Reply record created"
        ], 201);

        
        
    }
    public function replyStore(Request $request)
    {
        
        Comment::create([ "COMMENT_USER_ID" => auth()->user()->id, "COMMENT_POST_ID" => $request->COMMENT_POST_ID,"COMMENT_PARENT_ID"=>$request->COMMENT_PARENT_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
        return response()->json([
            "message" => "Reply record created"
          ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment=Comment::find($id);
        return $comment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->COMMENT_BODY = $request->COMMENT_BODY ;
        $comment->save();
        return response()->json([
            "message" => "records updated successfully"
          ], 200);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment=Comment::find($id);
          if(count($comment->replies) > 0) {
         // Delete children recursive
        foreach ($comment->replies as $reply) {
              $reply->delete();
         }
      }
    $comment->delete();
     return response()->json([
        "message" => "records deleted"
      ], 202);
    }
    
}
