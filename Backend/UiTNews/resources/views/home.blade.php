@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="../css/homepage.css">
</head>
<article id="pop-news">
    <div class="row d-flex justify-content-center">
        <!--post1-->
        <div class="col-md-7 col-12" id="featured">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    @if(!empty($latestPosts))
                    @php    $i=1    @endphp

                     @foreach ($latestPosts as $post)
                        <div
                            @if ($i==1)
                                class="carousel-item active "
                            @else
                                class="carousel-item"
                            @endif
                             >
                                <img src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}' class="d-block w-100">
                                <div class="carousel-caption ">
                                    <a class="carousel-title" href="{{ route('postdetail.show', $post->id) }}">

                                            {{$post->POST_TITLE}}

                                        {{-- <p> {{ date_format($post->created_at,"d/m/Y H:i:s") }} </p> --}}
                                    </a>
                                </div>
                        </div>

                        @php   $i++   @endphp
                    @endforeach
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--post2 -->
            <div id="picked" class="row ">
                @if(!empty($post_sk))
                @foreach ($post_sk as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"  src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}' alt="Card image">
                            <div class="card-body">
                                <a href="{{ route('postdetail.show', $post->id) }}">
                                    <h4 class="card-title">{{ $post->POST_TITLE }}</h4>
                                </a>
                                <p class="card-text content" id="hidden">{{$post->POST_DESCRIPT }}</p>
                                {{-- <p class="time">{{ date_format($post->created_at,"d/m/Y H:i:s") }} </p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
        <!--post 3 b??n ph???i-->
        <div class="col-md-5 " id="latest">
            <div class="board clearfix">
                <div class="news-roller">
            @foreach ($topView as $post)
            <div class="slot1">
                <img  src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}' >
                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                <p class="content"id="hidden"> {{$post->POST_DESCRIPT }}</p>
                {{-- <p class="type">{{ $type->TYPE_NAME }}</p> --}}
                {{-- <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p> --}}
            </div>
        @endforeach
            {{-- <div class="board clearfix">
                <div class="news-roller">
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/07-may-2021/techlimits-feature-768x432-1620374549751.jpg">
                        <a href="#"><strong>Th??? R???i Th??ch: T???i gi???n c??ch b???n ti??u th??? th??ng tin</strong></a>
                        <p class="content" id="hidden">6 B?????c l??m ch??? cu???c s???ng tr???c tuy???n c???a b???n b???ng c??ch ?????t ra gi???i h???n trong vi???c ti??u th??? th??ng tin.</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/09-dec-2020/cautoan-feature1-768x432-1607527827958.jpg">
                        <a href="#"><strong>C??c ki???u c???u to??n th?????ng g???p: B???n theo ??u???i s??? ho??n h???o
                                n??o?</strong></a>
                        <p class="content" id="hidden">Kh??ng ch??? ????n thu???n l?? s??? c???u to??n, m???t t??nh c??ch perfectionist c??n c?? th??? ???????c chia ra th??nh nhi???u lo???i n???a ?????y! B???n thu???c lo???i c???u to??n n??o sau ????y?</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1" id="hidden">
                        <img src="https://img.vietcetera.com/uploads/images/06-may-2021/vulnerability-feature-768x432.jpg">
                        <a href="#">??<strong>L??m sao ????? m??? l??ng m?? kh??ng g??y phi???n l??ng?</strong></a>
                        <p class="content" id="hidden">Nhi???u ng?????i l???m t?????ng m??? l??ng l?? thao t??ng ho???c l?? ph????ng ti???n ????? tr??t c???m x??c. ??i???m kh??c nhau gi???a ch??ng l?? g???</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/11-may-2021/20210511-dien-anh-logo-2-01-768x432.jpg">
                        <a href="#"><strong>Girl From Nowhere 2: C?? g?? hay v?? kh??ng hay ??? 8 t???p
                                phim?</strong></a>
                        <p class="content" id="hidden">B??i vi???t gi??p b???n h??? th???ng l???i c??? m???t m??a 2 ???xu???ng s???c??? th???y r?? c???a Girl From Nowhere - series Netflix ????nh ????m th???i gian g???n ????y. B???n th??ch t???p phim n??o nh???t?</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>

</article>
<hr>
<article id="news-video">
    <div class="row d-flex justify-content-center">
        <!--post 4-->
        <div class="col-md-7 col-12">
            <h2>SPORTS</h2>
            <div class="left-board clearfix">
                <div class="news-roller">
                    <?php $i=1; ?>
                    @foreach ($post_tt as $post)
                        @if ($i < 3)
                            <div class="slot1">
                        @else
                            <div class="slot1 more more-news ">
                        @endif
                                <img style="width: 300px;" src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}' >
                                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                                <p class="content"id="hidden"> {{$post->POST_DESCRIPT }}</p>
                                {{-- <p class="type">{{ $type->TYPE_NAME }}</p> --}}
                                {{-- <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p> --}}
                            </div>
                        <?php $i++; ?>
                        @endforeach


                </div>
            </div>
        </div>
        <!--button see more news-->
        <div class="btn-seemore btn-news ">
            <button id="seemore">
                XEM TH??M
                <span></span>
            </button>
        </div>
        {{-- Render the latest Videos --}}
        <div class="col-md-5 col-12">
            <h2>LATEST VIDEOS</h2>
            <div class="board clearfix">
                <div class="news-roller">
                    <div class="playlist clearfix">
                        @foreach ($latestVideos as $video)
                        <div class="slot1">
                        <a href="{{ route('videos.show', $video->id) }}">
                            <div class="thumbnails">
                                <iframe width="250" height="150" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>{{ $video->VIDEO_TITLE }}</strong></div>
                                <div class="item-info">
                                    <p>{{$video->VIDEO_VIEW}} l?????t xem <sup>.</sup> {{$video->VIDEO_AUTHOR}}</p>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="playlist clearfix more more-videos">
                        @foreach ($latestVideosMore as $video)
                        <a href="{{ route('videos.show', $video->id) }}" class="videoTitle">
                            <div class="thumbnails">
                                <iframe width="250" height="150" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>{{ $video->VIDEO_TITLE }}</strong></div>
                                <div class="item-info">
                                    <p>{{$video->VIDEO_VIEW}} l?????t xem <sup>.</sup> {{$video->VIDEO_AUTHOR}}</p>
                                </div>
                            </div>

                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--button see more videos-->
        <div class="btn-seemore btn-videos">
            <button id="seemore">
                XEM TH??M
                <span></span>
            </button>
        </div>
    </div>
</article>

</main>
<!--see more both-->
<div class="btn-seemore btn-news-videos">
<button id="seemore">
    XEM TH??M
    <span></span>
</button>
</div>
    </div>
</article>
@endsection
