@extends('layouts.app')
<style>
   
    .crud{ 
        border-style:none;
        background-color:#fff;
        display: inline-block;
        margin-left:40px;
    }
    .crud:hover{ 
        text-decoration:underline;
        color:#ce1212;
    }
    .form_delete{ 
        display:inline-block;
        float:left;
       
    }
   
    #btn-loadmore{ 
        border-style:none;
        text-align:center;
        background:white;
    }
    #btn-loadmore:hover{ 
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
                        <input type="text" name="COMMENT_BODY" id="COMMENT_BODY" class="form-control" />
                        <input type="hidden" name="COMMENT_POST_ID" id="COMMENT_POST_ID" value="{{ $post->id }}" />    
                        <input type="hidden" name="COMMENT_USER_ID" id="COMMENT_USER_ID" value="{{Auth::user()->id}}" />                  
                        <button type="submit" class="btn btn-warning" id="btn-submit" >Submit</button>
                    </div>
                        
                    </form>
                    <br>
                    <div id="showcomment">
                    
                    </div>
                    <center>
                    <button type="sunmit" id="btn-loadmore">Load more comments</button> 
                    </center>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript"> 

    const username=()=>{ 
        $.ajax({
            type:"GET",
            url:'http://127.0.0.1:8000/api/comments/'+{{$post->id}}, 
            }).done((users)=>{ 
                let i=0;
                users.forEach((user)=>{ 
                    $("#username"+i).prepend(user.USER_NAME);
                    i++;
                });
            })
            
    };


    var count=0;
    const loadComment=()=>{
        $.ajax({
        type:"GET",
        url:'http://127.0.0.1:8000/api/post/'+{{$post->id}}+'/comments',
            
        }).done((cmts)=>{
               
                let commentBox = $('#showcomment');
                commentBox.html(' ');
                cmts.forEach((cmt) => {
                    
                    if(cmt.COMMENT_PARENT_ID== null){
                        if(cmt.COMMENT_USER_ID=={{Auth::user()->id}}){ 
                            
                            commentBox.prepend(`
                    <div id="display-comment`+count+`" > 
                        <img src="https://image.flaticon.com/icons/png/512/924/924874.png" style="display:inline-block;width:5%;float:left;border-radius:60%;" >
                        <div  style="background-color:#dfeeea;padding:8px 23px; border-radius:13px;margin-bottom:0;margin-left:45px;margin-right:45px;"> 
                            <strong id="username`+count+`"></strong>
                             <p id="display${cmt.COMMENT_ID}">${cmt.COMMENT_BODY}</p>
                        </div>
                        <button class="crud" id="btn-delete${cmt.COMMENT_ID}"  data-id="${cmt.COMMENT_ID}">Delete</button>
                        <button class="crud" id="btn-formedit${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}" >Edit</button>
                        <button class="crud" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                        <div id="formrep${cmt.COMMENT_ID}"></div>
                        <div style="margin-top:10px;" id="reply${cmt.COMMENT_ID}"></div>
                    </div>
                    
                    `);
                        count++;
                        deleleComment(cmt.COMMENT_ID);
                        editComment(cmt.COMMENT_ID);
                        replyComment(cmt.COMMENT_ID);
                        }else{ 
                            commentBox.prepend(`
                    <div id="display-comment`+count+`" > 
                        <img src="https://image.flaticon.com/icons/png/512/924/924874.png" style="display:inline-block;width:5%;float:left;border-radius:60%;" >
                        <div  style="background-color:#dfeeea;padding:8px 23px; border-radius:13px;margin-bottom:0;margin-left:45px;margin-right:45px;"> 
                        <strong id="username`+count+`"></strong>
                             <p id="display${cmt.COMMENT_ID}">${cmt.COMMENT_BODY}</p>
                        </div>
                        
                        <button class="crud" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                        <div id="formrep${cmt.COMMENT_ID}"></div>
                        <div style="margin-top:10px;" id="reply${cmt.COMMENT_ID}"></div>
                    </div>
                    
                    `);
                    count++;
                    replyComment(cmt.COMMENT_ID);
                        }
                    
                    }else{
                    if (cmt.COMMENT_USER_ID=={{Auth::user()->id}}){ 
                    $('#reply'+cmt.COMMENT_PARENT_ID).prepend(`
                    <div id="display-comment`+count+`" style="margin-left:40px;"> 
                        <img src="https://image.flaticon.com/icons/png/512/924/924874.png" style="display:inline-block;width:5%;float:left;border-radius:60%;" >
                        <div  style="background-color:#dfeeea;padding:8px 23px; border-radius:13px;margin-bottom:0;margin-left:45px;margin-right:45px;"> 
                        <strong id="username`+count+`"></strong>
                            <p id="display${cmt.COMMENT_ID}">${cmt.COMMENT_BODY}</p>
                        </div>
                        <button class="crud" id="btn-delete${cmt.COMMENT_ID}"  data-id="${cmt.COMMENT_ID}">Delete</button>
                        <button class="crud" id="btn-formedit${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}" >Edit</button>
                        <button class="crud" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                        <div id="formrep${cmt.COMMENT_ID}"></div>
                        <div style="margin-top:10px;" id="reply${cmt.COMMENT_ID}"></div>
                     </div>
                    
                        `);
                       count++;
                        deleleComment(cmt.COMMENT_ID);
                        editComment(cmt.COMMENT_ID);
                        replyComment(cmt.COMMENT_ID);
                        } else{ 

                            $('#reply'+cmt.COMMENT_PARENT_ID).prepend(`
                    <div id="display-comment`+count+`" style="margin-left:40px;"> 
                        <img src="https://image.flaticon.com/icons/png/512/924/924874.png" style="display:inline-block;width:5%;float:left;border-radius:60%;" >
                        <div  style="background-color:#dfeeea;padding:8px 23px; border-radius:13px;margin-bottom:0;margin-left:45px;margin-right:45px;"> 
                        <strong id="username`+count+`"></strong>
                            <p id="display${cmt.COMMENT_ID}">${cmt.COMMENT_BODY}</p>
                        </div>
                        
                        <button class="crud" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                        <div id="formrep${cmt.COMMENT_ID}"></div>
                        <div style="margin-top:10px;" id="reply${cmt.COMMENT_ID}"></div>
                     </div>
                    <br>
                        `);
                        count++;
                        replyComment(cmt.COMMENT_ID);

                        }
                        
                    }

                    
                })
               
                displaymore();
                
    }).done(()=>{
     
    
    });
    }; 
    loadComment();
    username();
    
    const displaymore=()=>{ 
        console.log(count);
        var b=count-8;
        var d;
        for (d=0;d<b;d++){ 
            console.log("d="+d);
            $("#display-comment"+d).hide();
        };
        $("#btn-loadmore").click(function(){ 
            if(b>8){ 
                b=b-8;
                console.log("b="+b);
            }else{ 
                b=0;
                $("#btn-loadmore").hide();
            }
            for (let x=b;x<d;x++){ 
            console.log("x="+x);
            $("#display-comment"+x).show();
        };
        if(d>8){ 
            d=d-8;
            console.log("d="+d);
            }
        
        });
    };
    const deleleComment=(id)=>{
        
        
        $("#btn-delete"+id).click(function(e){
            console.log("click to delete");
            var delete_id = $(this).data('id');
            e.preventDefault();
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
            var Data = {
                        COMMENT_ID: delete_id,
                    };
            var urldelete='http://127.0.0.1:8000/api/comments/'+delete_id;
            $.ajax({
                type: "DELETE",
                url:urldelete ,
                data: Data,
                dataType: 'json',   
            }).done((cmt)=>{
                count=0;
                loadComment();
                username();
            }).fail((er)=>{
                console.error(er);
            });

        });
    };
    const editComment=(id)=>{
       
        $("#btn-formedit"+id).click(function(e){
            console.log("edit");
            var edit_id = $(e.currentTarget).data('id');
            $("#display"+edit_id).append(`<input type="text" id="COMMENT_BODY`+edit_id+`" name="COMMENT_BODY" class="form-control" required/> <input type="submit" data-id=`+edit_id+` id="btn-edit" class="btn btn-warning" value="Update" />`);
           
            $("#btn-edit").click(function(e){ 
            
            var edit_id = $(e.currentTarget).data('id');

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }   
            });
            var formData = {
                COMMENT_BODY: jQuery('#COMMENT_BODY'+edit_id).val(),
                COMMENT_POST_ID: {{ $post->id }},
                COMMENT_USER_ID: {{Auth::user()->id}},
            };
            var urledit='http://127.0.0.1:8000/api/comments/'+edit_id;
            $.ajax({
                type: "PUT",
                url:urledit ,
                data: formData,
                dataType: 'json',   
            }).done((cmt)=>{
                count=0;
                loadComment();
                username();
            }).fail((e)=>{});
        });

           });
        

    };
    const replyComment=(id)=>{
       
        $("#btn-formreply"+id).click(function(e){
            var parent_id = $(e.currentTarget).data('id');
            $("#formrep"+parent_id).append(`<input style="margin-left:40px; margin-top:5px; width:90%;" type="text" id="REPLY_COMMENT_BODY`+parent_id+`" name="COMMENT_BODY" class="form-control" required/> <input style="margin-left:40px;" type="submit" data-id=`+parent_id+` id="btn-reply`+id+`" class="btn btn-warning" value="Reply" />`);
           
            $("#btn-reply"+id).click(function(e){ 
            
            var parent_id = $(e.currentTarget).data('id');

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }   
            });
            var formData = {
                COMMENT_BODY: jQuery('#REPLY_COMMENT_BODY'+parent_id).val(),
                COMMENT_POST_ID: {{ $post->id }},
                COMMENT_USER_ID: {{Auth::user()->id}},
                COMMENT_PARENT_ID: parent_id,
            };
            var urlrep='http://127.0.0.1:8000/api/reply';
            $.ajax({
                type: "POST",
                url:urlrep ,
                data: formData,
                dataType: 'json',   
            }).done((cmt)=>{
                count=0;
                loadComment();
                username();
            }).fail((e)=>{});
        });

           });
        

    };

    
    
    $("#btn-submit").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    const formData = {
        COMMENT_BODY: jQuery('#COMMENT_BODY').val(),
        COMMENT_POST_ID: jQuery('#COMMENT_POST_ID').val(),
        COMMENT_USER_ID: jQuery('#COMMENT_USER_ID').val(),
    };
    $.ajax({
        type: "POST",
        url: "http://127.0.0.1:8000/api/comments",
        data: formData,
        dataType: 'json',   
    }).done((cmt)=>{
        jQuery('#createcmt').trigger("reset");
        count=0;
        loadComment();
        username();
        
    }).fail((e)=>{
    });
    });

    





</script>
@endsection