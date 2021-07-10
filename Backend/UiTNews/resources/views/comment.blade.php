<div id="createcmt" class="jquery-comments ">
    @csrf
    <div class="commenting-field main">
        <div class="textarea-wrapper">
            <span class="close inline-button" style=""><i class="fa fa-times"></i></span>
            <div class="textarea" id="COMMENT_BODY" data-placeholder="Add a comment" contenteditable="true" style="height: 3.65em;"></div>
        </div>
    </div>
</div>

<button type="submit" style="margin-left:20px; margin-bottom:10px" class="btn btn-outline-primary btn-lg" id="btn-submit" >Submit</button>

<br>
<h4 style="padding-left: calc(var(--bs-gutter-x)/ 2);">Comments</h4>
<br>
<div id="showcomment" class="jquery-comments ">
    <div class="data-container">
        <ul id="comment-list" class="main"></ul>
    </div>
</div>
    <center>
        <button style="" id="btn-loadmore">Load more comments</button>
    </center>

<script type="text/javascript">
    var type;
    if ('{{$post->POST_TITLE}}'!=''){
         type="post";
    }else{
         type="video";
    }

    const username=()=>{
        $.ajax({
            type:"GET",
            url:'http://localhost/UiT_News/Backend/UiTNews/api/comments/'+type+{{$post->id}},

            }).done((users)=>{
                let i=0;
                users.forEach((user)=>{
                    $("#username"+i).prepend(user.USER_NAME);
                    i++;
                });
            });
    };
    var count=0;
    const loadComment=()=>{
        $.ajax({
        type:"GET",

        url:'http://localhost/UiT_News/Backend/UiTNews/api/post/'+type+{{$post->id}}+'/comments',

        }).done((cmts)=>{

                let commentBox = $('#comment-list');
                commentBox.html(' ');


                cmts.forEach((cmt) => {
                    let date=new Date(cmt.created_at);

                    if(cmt.COMMENT_PARENT_ID== null){
                        @if(Route::has('login'))
                        @auth
                        if(cmt.COMMENT_USER_ID=={{ Auth::user()->id }}){
                            commentBox.prepend(`
                            <li id="display-comment`+count+`" class="comment" >
                            <div class="comment-wrapper" style="padding-top:13px">
                            <div style="background-image:url('https://image.flaticon.com/icons/png/512/924/924874.png');" class="profile-picture round" ></div>
                            <time>`+date.getDate() +`-`+(date.getMonth()+1)+`-`+date.getFullYear()+`</time>
                            <div class="comment-header"><span class="name" id="username`+count+`"></span></div>
                            <div class="wrapper">
                                <div id="display${cmt.COMMENT_ID}" class="content">${cmt.COMMENT_BODY}</div>
                                <div id="formedit${cmt.COMMENT_ID}"></div>
                                <span class="actions">
                                    <button class="action reply" id="btn-delete${cmt.COMMENT_ID}"  data-id="${cmt.COMMENT_ID}">Delete</button>
                                    <button class="action reply" id="btn-formedit${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}" >Edit</button>
                                    <button class="action reply" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                                </span>
                            </div>

                        <div id="formrep${cmt.COMMENT_ID}"></div>
                        <ul class="child-comments" id="reply${cmt.COMMENT_ID}" style="margin-top:18px;"></ul>
                    </div>
                    </li>

                    `);
                        count++;
                        deleleComment(cmt.COMMENT_ID);
                        editComment(cmt.COMMENT_ID);
                        replyComment(cmt.COMMENT_ID);
                        }else
                        @endauth
                        @endif
                        {

                            commentBox.prepend(`
                            <li id="display-comment`+count+`" class="comment" >
                                <div class="comment-wrapper" style="padding-top:13px">
                                <div style="background-image:url('https://image.flaticon.com/icons/png/512/924/924874.png');" class="profile-picture round" ></div>
                                <time>`+date.getDate() +`-`+(date.getMonth()+1)+`-`+date.getFullYear()+`</time>
                                <div class="comment-header"><span class="name" id="username`+count+`"></span></div>
                                <div class="wrapper" >
                                    <div id="display${cmt.COMMENT_ID}" class="content">${cmt.COMMENT_BODY}</div>
                                    <div id="formedit${cmt.COMMENT_ID}"></div>
                                    <span class="actions">

                                    <button class="action reply" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>
                                     </span>
                                </div>


                                <div id="formrep${cmt.COMMENT_ID}"></div>
                                <ul class="child-comments" id="reply${cmt.COMMENT_ID}" style="margin-top:18px;"></ul>

                                </div>
                            </li>

                    `);
                    count++;
                    replyComment(cmt.COMMENT_ID);
                    @if(Route::has('login'))
                        }
                    @endif

                    }else{
                        @if(Route::has('login'))
                        @auth
                    if (cmt.COMMENT_USER_ID=={{ Auth::user()->id }}){
                    $('#reply'+cmt.COMMENT_PARENT_ID).prepend(`
                    <li id="display-comment`+count+`" class="comment" >
                        <div class="comment-wrapper" style="padding-top:13px">
                            <div style="background-image:url('https://image.flaticon.com/icons/png/512/924/924874.png');" class="profile-picture round" ></div>
                            <time>`+date.getDate() +`-`+(date.getMonth()+1)+`-`+date.getFullYear()+`</time>
                            <div class="comment-header"><span class="name" id="username`+count+`"></span></div>
                            <div class="wrapper">
                                <div id="display${cmt.COMMENT_ID}" class="content">${cmt.COMMENT_BODY}</div>
                                <div id="formedit${cmt.COMMENT_ID}"></div>
                                <span class="actions">
                                    <button class="action reply" id="btn-delete${cmt.COMMENT_ID}"  data-id="${cmt.COMMENT_ID}">Delete</button>
                                    <button class="action reply" id="btn-formedit${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}" >Edit</button>
                                    <button class="action reply" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>

                                </span>
                            </div>
                            <div id="formrep${cmt.COMMENT_ID}"></div>
                        <ul class="child-comments" id="reply${cmt.COMMENT_ID}" style="margin-top:18px;"></ul>
                        </div>
                    </li>

                        `);
                       count++;
                        deleleComment(cmt.COMMENT_ID);
                        editComment(cmt.COMMENT_ID);
                        replyComment(cmt.COMMENT_ID);
                    }else
                    @endauth
                    @endif
                        {



                            $('#reply'+cmt.COMMENT_PARENT_ID).prepend(`
                    <li id="display-comment`+count+`" class="comment" >
                        <div class="comment-wrapper" style="padding-top:13px">
                            <div style="background-image:url('https://image.flaticon.com/icons/png/512/924/924874.png');" class="profile-picture round" ></div>
                            <time>`+date.getDate() +`-`+(date.getMonth()+1)+`-`+date.getFullYear()+`</time>
                            <div class="comment-header"><span class="name" id="username`+count+`"></span></div>
                            <div class="wrapper">
                                <div id="display${cmt.COMMENT_ID}" class="content">${cmt.COMMENT_BODY}</div>
                                <div id="formedit${cmt.COMMENT_ID}"></div>
                                <span class="actions">
                                    <button class="action reply" class="crud" id="btn-formreply${cmt.COMMENT_ID}" data-id="${cmt.COMMENT_ID}">Reply</button>

                                </span>
                            </div>
                            <div id="formrep${cmt.COMMENT_ID}"></div>
                            <ul class="child-comments" id="reply${cmt.COMMENT_ID}" style="margin-top:18px;"></ul>
                        </div>
                     </li>
                    <br>
                        `);
                        count++;

                        @if(Route::has('login'))

                        replyComment(cmt.COMMENT_ID);
                        };
                        @endif
                    };

            });
                displaymore();
    }).done(()=>{

    });
    };
    loadComment();
    username();

    const displaymore=()=>{

        if (count<8){
            $("#btn-loadmore").hide();
        }else{
            $("#btn-loadmore").show();
        }
        var b=count-8;
        var d;

        for (d=0;d<b;d++){
            $("#display-comment"+d).hide();
        };
        $("#btn-loadmore").click(function(){
            if(b>8){
                b=b-8;
            }else{
                b=0;
                $("#btn-loadmore").hide();
            }
            for (let x=b;x<d;x++){
            $("#display-comment"+x).show();
        };
        if(d>8){
            d=d-8;
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
            var urldelete='http://localhost/UiT_News/Backend/UiTNews/api/comments/'+delete_id;
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
            @if(Route::has('login'))
            @auth
            console.log("edit");
            var edit_id = $(e.currentTarget).data('id');
            $("#display"+edit_id).hide();
            $("#formedit"+edit_id).append(`
            <input style="font-size:1.5rem;" type="text" value="`+$("#display"+edit_id).text()+`" id="COMMENT_BODY`+edit_id+`" name="COMMENT_BODY" class="form-control" required/>
            <span class="actions">
                <input class="action reply" data-id=`+edit_id+` id="btn-edit"  value="Update" />
                <input  class="action reply" type="submit"  id="canceledit`+id+`"  value="Cancel" />
            </span>
            `);
            $("#btn-formedit"+id).hide();
            $("#btn-formreply"+id).hide();
            $("#btn-delete"+id).hide();
           $("#canceledit"+id).click(function(){
            $("#formedit"+edit_id).html(' ');
            $("#display"+edit_id).show();
            $("#btn-formedit"+id).show();
            $("#btn-formreply"+id).show();
            $("#btn-delete"+id).show();
           });
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
                COMMENT_POST_ID: type+{{ $post->id }},
                COMMENT_USER_ID: {{auth::user()->id}},
            };
            var urledit='http://localhost/UiT_News/Backend/UiTNews/api/comments/'+edit_id;
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
        @endauth
        @endif
           });

    };

    const replyComment=(id)=>{

        $("#btn-formreply"+id).click(function(e){
            @if(Route::has('login'))
            @auth
            var parent_id = $(e.currentTarget).data('id');
            $("#formrep"+parent_id).html(' ');
            $("#formrep"+parent_id).append(`
            <div class="jquery-comments ">
                @csrf
                <div class="commenting-field main">
                    <div class="textarea-wrapper">
                    <span class="close inline-button" id="cancelreply`+id+`" style=""><i class="fa fa-times"></i></span>
                        <div class="textarea" id="REPLY_COMMENT_BODY`+parent_id+`" data-placeholder="Add a comment" contenteditable="true" style="height: 3.65em;"></div>
                    </div>
                </div>
            </div>
            <input style="margin-left:40px;" type="submit" data-id=`+parent_id+` id="btn-reply`+id+`" class="btn btn-outline-success btn-lg" value="Reply"/>
            `);
           $("#cancelreply"+id).click(function(){
            $("#formrep"+parent_id).html(' ');
           });
            $("#btn-reply"+id).click(function(e){

            var parent_id = $(e.currentTarget).data('id');

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = {
                COMMENT_BODY: jQuery('#REPLY_COMMENT_BODY'+parent_id).text(),
                COMMENT_POST_ID: type+{{ $post->id }},
                COMMENT_USER_ID: {{ Auth::user()->id }},
                COMMENT_PARENT_ID: parent_id,
            };
            var urlrep='http://localhost/UiT_News/Backend/UiTNews/api/reply';
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
        @else
        alert("Please login to add comments!");
        @endauth
        @endif

    });


    };

    $("#btn-submit").click(function (e) {
        @if(Route::has('login'))
        @auth
        console.log('post'+{{ $post->id }});
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    const formData = {
        COMMENT_BODY: jQuery('#COMMENT_BODY').text(),
        COMMENT_POST_ID: type+{{ $post->id }},
        COMMENT_USER_ID: {{ Auth::user()->id }},
    };
    $.ajax({
        type: "POST",
        url: "http://localhost/UiT_News/Backend/UiTNews/api/comments",
        data: formData,
        dataType: 'json',
    }).done((cmt)=>{
        jQuery('#COMMENT_BODY').text(' ');
        count=0;
        loadComment();
        username();
    }).fail((e)=>{
    });

    @else
    alert('Please login to add comments!');
    @endauth
    @endif

    })


</script>
