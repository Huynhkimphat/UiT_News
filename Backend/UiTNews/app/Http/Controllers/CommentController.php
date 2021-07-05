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
    public function showpost($id){ 
      
      $comments=Comment::where('COMMENT_POST_ID',"=",$id)->orderBy('COMMENT_ID')->get();
      return $comments;
      
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
      if($request->COMMENT_BODY==null){ 
        return back()->withFail('Error message');

      }else{ 
       $comment= Comment::create([ "COMMENT_USER_ID" =>$request->COMMENT_USER_ID, "COMMENT_POST_ID" => $request->COMMENT_POST_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
        return $comment;
     
      }
      
        
        
    }
    public function replyStore(Request $request)
    {
      if($request->COMMENT_BODY==null){ 
        return back()->withFail('Error message');

      }else{ 
        $reply=Comment::create([ "COMMENT_USER_ID" =>$request->COMMENT_USER_ID, "COMMENT_POST_ID" => $request->COMMENT_POST_ID,"COMMENT_PARENT_ID"=>$request->COMMENT_PARENT_ID, "COMMENT_BODY" => $request->COMMENT_BODY ]);
          
        return $reply;
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
      $comments=Comment::where('COMMENT_POST_ID',"=",$id)->orderBy('COMMENT_ID')->get();
        $comtusers=[];
        $i=0;
      foreach($comments as $comment){ 

        $comtusers[$i]=["COMMENT_USER_ID"=>$comment->COMMENT_USER_ID,"USER_NAME"=>$comment->user->name];
        $i++;
      }
      return $comtusers;
        
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

          'error' => 'fail!'
    
      ]);

      }else{ 
        $comment = Comment::find($id);
        $comment->COMMENT_BODY = $request->COMMENT_BODY ;
        $comment->save();
        return response()->json([

          'success' => 'Record updated successfully!'
    
      ]);
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

      'success' => 'Record deleted successfully!'

  ]);
}
}