<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments=Comment::all();
        return response()->json($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $comments = [
        [
            'COMMENT_ID' => '1',
            'COMMENT_BODY' => 'hello world',
            'COMMENT_USER_ID' =>'1',
            
            'COMMENT_POST_ID' => '1',
        ],
        [
          'COMMENT_ID' => '2',
          'COMMENT_BODY' => 'hhhkkkkkwyfgyausz',
          'COMMENT_USER_ID' =>'2',
          
          'COMMENT_POST_ID' => '1',
        ],
        [
          'COMMENT_ID' => '3',
          'COMMENT_BODY' => 'hello ',
          'COMMENT_USER_ID' =>'3',
          'COMMENT_PARENT_ID' => '1',
          'COMMENT_POST_ID' => '1',
        ],
        [
          'COMMENT_ID' => '4',
          'COMMENT_BODY' => 'ajkhfiuwh',
          'COMMENT_USER_ID' =>'1',
          
          'COMMENT_POST_ID' => '1',
        ], 
        [
          'COMMENT_ID' => '5',
          'COMMENT_BODY' => 'jasghfuiqh awuerouia',
          'COMMENT_USER_ID' =>'3',
          
          'COMMENT_POST_ID' => '1',
      ]
      ];

    
        foreach ($comments as $comment) {
            Comment::create($comment);
        }
        return response()->json([
          "message" => "Comment record created"
        ], 201);
  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $comment= Comment::create([ "COMMENT_USER_ID" =>$request->COMMENT_USER_ID, "COMMENT_POST_ID" => $request->COMMENT_POST_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
        return $comment;
     
      
      
        
        
    }
    public function replyStore(Request $request)
    {
      if($request->COMMENT_BODY==null){ 
        return response()->json([
          "message" => "Comment can not be null"
        ], 201);

      }else{ 
        Comment::create([ "COMMENT_USER_ID" => auth()->user()->id, "COMMENT_POST_ID" => $request->COMMENT_POST_ID,"COMMENT_PARENT_ID"=>$request->COMMENT_PARENT_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
        return response()->json([
            "message" => "Reply record created"
          ], 201);
        }
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
      if($request->COMMENT_BODY==null){ 
        return response()->json([
          "message" => "Comment can not be null"
        ], 201);

      }else{ 
        $comment = Comment::find($id);
        $comment->COMMENT_BODY = $request->COMMENT_BODY ;
        $comment->save();
        return response()->json([
            "message" => "records updated successfully"
          ], 200);
        }
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
