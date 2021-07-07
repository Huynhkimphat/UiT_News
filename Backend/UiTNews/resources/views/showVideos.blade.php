@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
    </script>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/videosShow.css">

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
                    {{-- Here for comments on Video --}}
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
