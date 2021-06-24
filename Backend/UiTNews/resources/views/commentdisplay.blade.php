@foreach($comments as $comment)
    <div class="display-comment"  @if( $comment->COMMENT_PARENT_ID != null) style="margin-left:40px;" @endif >
        <img src="https://image.flaticon.com/icons/png/512/924/924874.png" style="display:inline-block;width:5%;float:left;border-radius:60%;" >
        <div  style="background-color:#dfeeea;padding:8px 23px; border-radius:13px;margin-bottom:0;margin-left:45px;margin-right:45px;"> 
            <strong>{{ $comment->user->name }}</strong>
            <p id="display{{$comment->COMMENT_ID}}">{{ $comment->COMMENT_BODY }}</p>
             
        </div>
        @if(Auth::user()->id == $comment->user->id)
        <form class="form_delete" action="{{ route('comments.destroy', $comment->COMMENT_ID) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="delete" type=submit value="Delete" />
        </form>
        <button class="delete" id="edit" onclick="myFunction{{$comment->COMMENT_ID}}()" >Edit</button>
        @endif
        <button class="delete" id="reply" onclick="replyFunction{{$comment->COMMENT_ID}}()" >Reply</button>
        <div id="replycomment{{$comment->COMMENT_ID}}"></div></br>
        <div id="replies{{$comment->COMMENT_ID}}">
        @include('commentdisplay', ['comments' => $comment->replies->sortDesc()->take(1)])
        </div>
        @if (count($comment->replies)>1)
        <button id="morereples" >{{count($comment->replies)-1}} replies</button>
       @endif
    
        <script> 
    
            function myFunction{{$comment->COMMENT_ID}}(){ 
                document.getElementById("display{{$comment->COMMENT_ID}}").innerHTML='@include('editcomment',['COMMENT_ID'=>$comment->COMMENT_ID, 'post_id' => $post->id]) ';
            };
            function replyFunction{{$comment->COMMENT_ID}}(){ 
                document.getElementById("replycomment{{$comment->COMMENT_ID}}").innerHTML='@include('reply')';
            }
            
        </script>

    </div>
@endforeach