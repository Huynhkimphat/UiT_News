@extends('layouts.app')

@section('content')
<head>
    
    
    </script>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/videosShow.css">
    <style>
    .crud{
        border-style:none;
        background-color:#fff;
        display: inline-block;
        margin-left:60px;
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
    .name{ 
        font-size:1.4rem;
    }
    .content{ 
        font-size:1.3rem;
    }
    </style>
</head>

<body>

        <article id="pop-news">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-12" id="featured">
                    <div class="video">
                        <iframe width="100%" height="500" src="{{ $video->VIDEO_FILE }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="picked" class="row video-info">
                        <div class="item-title">
                            <strong>{{$video->VIDEO_TITLE}} | {{$video->VIDEO_AUTHOR}}</strong></div>
                        <div class="item-info">
                            <p>{{$video->VIDEO_DESCRIPTION}}</p>
                            <p>{{$video->VIDEO_VIEW}} lượt xem <sup>.</sup> {{$video->created_at}}</p><hr>
                        </div>
                    </div>
                    <h4 style="padding-left: calc(var(--bs-gutter-x)/ 2);">Add Comment</h4>
                        @include('home.comment',['post'=>$video])
                </div>
                <div class="col-md-4" id="latest">
                    <div class="board clearfix">
                        <div class="news-roller">
                            @foreach ($topView as $video)
                            <div class="slot1">
                                <div class="thumbnails">
                                    <iframe width="250" height="150" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="video-info">
                                    <a href="{{ route('videos.show', $video->id) }}"><strong>{{$video->VIDEO_TITLE}}</strong></a>
                                    <p class="content" id="hidden">{{$video->VIDEO_DESCRIPTION}}</p>
                                    <p class="type">{{$video->VIDEO_VIEW}} lượt xem</p>
                                    <p class="time">10 TH 7</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            

                       
        </article>
@endsection
