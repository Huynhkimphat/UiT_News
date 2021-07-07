<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CommentController extends Controller
{
    
    public function index()
    {
        //
    }
    public function showpost($id){ 
      
        $comments=Comment::where('COMMENT_POST_ID',"=",$id)->orderBy('COMMENT_ID')->get();
        return $comments;
        
      }

    
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
    
    public function show($id)
    {
        $comments=Comment::where('COMMENT_POST_ID',"=",$id)->orderBy('COMMENT_ID')->get();
        $cmtusers=[];
        $i=0;
      foreach($comments as $comment){ 

        $cmtusers[$i]=["COMMENT_USER_ID"=>$comment->COMMENT_USER_ID,"USER_NAME"=>$comment->user->name];
        $i++;
      }
      return $cmtusers;
        
    }

    
    public function edit(Comment $comment)
    {
        //
    }

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