@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
    .delete{ 
        border-style:none;
        background-color:#fff;
        display: inline-block;
        margin-left:40px;
    }
    .delete:hover{ 
        text-decoration:underline;
        color:#ce1212;
    }
    .form_delete{ 
        display:inline-block;
        float:left;
       
    }
    #morereples{ 
        border-style:none;
        background-color:#fff;
        margin-left:90px;
        margin-bottom:10px;
    }
    #morereples:hover{ 
        text-decoration:underline;
        color:#ce1212;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ $post->POST_TITLE }}</p>
                    <p>
                        {{ $post->POST_CONTENT }}
                    </p>
                    <hr> 

                    <h4>Add Comment</h4>   
                    @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                    @endif
                    @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                    @endif
                    <form id="createcmt">
                        @csrf
                        <div class="form-group">
                        <input type="text" name="COMMENT_BODY" class="form-control" />
                        <input type="hidden" name="COMMENT_POST_ID" id="COMMENT_POST_ID" value="{{ $post->id }}" />    
                        <input type="hidden" name="COMMENT_USER_ID" id="COMMENT_USER_ID" value="{{Auth::user()->id}}" />                  
                        <button type="submit" class="btn btn-warning" id="btn-submit" >Submit</button>
                    </div>
                        
                    </form>
                    <br>
                    @include('commentdisplay', ['comments' => $post->comments->sortDesc()->take(5), 'post_id' => $post->id])
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript"> 
    $("#createcmt").submit(function(){ 
        let COMMENT_BODY=$("input[name='COMMENT_BODY']").val();
        let COMMENT_POST_ID=$("#COMMENT_POST_ID").val();
        let COMMENT_USER_ID=$("#COMMENT_USER_ID").val();

        axios.post('http://127.0.0.1:8000/api/comments', {
            COMMENT_BODY: COMMENT_BODY,
            COMMENT_POST_ID: COMMENT_POST_ID,
            COMMENT_USER_ID: COMMENT_USER_ID
            })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });

        
    });
    $(document).ready(function(){
    axios.get('http://127.0.0.1:8000/api/comments')
    .then(function (response) {
        console.log(response);
  })
    .catch(function (error) {
      console.log(error);
  });
})          
</script>
@endsection