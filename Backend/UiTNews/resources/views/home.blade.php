@extends('layouts.app')
@section('header')
@extends('layouts.header')
@endsection

@section('content')
<article id="pop-news">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 col-12" id="featured">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @php    $i=1    @endphp
                    @foreach ($latestPosts as $post)
                        <div
                            @if ($i==1)
                                class="carousel-item active "
                            @else
                                class="carousel-item"
                            @endif
                             >
                                <img src='public/file/post/{{$post->POST_IMAGE}}' class="d-block w-100">
                                <div class="carousel-caption ">
                                    <a class="carousel-title" href="{{ route('postdetail.show', $post->id) }}">
                                            {{$post->POST_TITLE}}
                                        {{-- <p> {{ date_format($post->created_at,"d/m/Y H:i:s") }} </p> --}}
                                    </a>
                                </div>
                        </div>
                        @php   $i++   @endphp
                    @endforeach
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
            <div id="picked" class="row ">
                @foreach ($post_sk as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"  src='public/file/post/{{$post->POST_IMAGE}}' alt="Card image">
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
            </div>
        </div>
        <div class="col-md-5 " id="latest">
            <div class="board clearfix">
                <div class="news-roller">
            @foreach ($topView as $post)
            <div class="slot1">
                <img  src='public/file/post/{{$post->POST_IMAGE}}' >
                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                <p class="content"id="hidden"> {{$post->POST_DESCRIPT }}</p>
                {{-- <p class="type">{{ $type->TYPE_NAME }}</p> --}}
                {{-- <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p> --}}
            </div>
        @endforeach
            </div>
        </div>
    </div>

</article>
<hr>
<article id="news-video">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 col-12">
            <h2>SPORTS</h2>
            <div class="left-board clearfix">
                <div class="news-roller">
                    @foreach ($post_tt as $post)
                            <div class="slot1">
                                <img style="width: 300px;" src='public/file/post/{{$post->POST_IMAGE}}' >
                                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                                <p class="content"id="hidden"> {{$post->POST_DESCRIPT }}</p>
                                {{-- <p class="type">{{ $type->TYPE_NAME }}</p> --}}
                                {{-- <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p> --}}
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="btn-seemore btn-news ">
            <button id="seemore">
                XEM THÊM
                <span></span>
            </button>
        </div>
        <div class="col-md-5 col-12">
            <h2>VIDEOS</h2>
            <div class="board clearfix">
                <div class="news-roller">
                    <div class="playlist clearfix">
                        <a href="#">
                            <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/1V86NyTL25g/maxresdefault.jpg')">
                                <img src="https://vietcetera.com/images/outline/Play.svg">
                                <p>4:27</p>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>"Hà Đỗ, Giám đốc sáng tạo Đẹp Magazine: Tác phẩm phải tự kể câu
                                        chuyện của nó | MAD EP06"</strong></div>
                                <div class="item-info">
                                    <p>1tr lượt xem <sup>.</sup> 10 giờ trước</p>
                                </div>
                            </div>

                        </a>
                        <a href="#">
                            <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/KmPUD_F1-bQ/maxresdefault.jpg');">
                                <img src="https://vietcetera.com/images/outline/Play.svg">
                                <p>4:27</p>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>Tiếp quản doanh nghiệp gia đình: tưởng dễ mà khó!? | THANG TIẾN
                                        EP03</strong></div>
                                <div class="item-info">
                                    <p>1tr lượt xem <sup>.</sup> 10 giờ trước</p>
                                </div>
                            </div>

                        </a>
                        <a href="#">
                            <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/s0tUZhVY5Vc/maxresdefault.jpg');">
                                <img src="https://vietcetera.com/images/outline/Play.svg">
                                <p>4:27</p>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>Kinh nghiệm từ 4 Giám đốc sáng tạo về quá trình học hỏi trong Agency
                                        | MAD EP04</strong>
                                </div>
                                <div class="item-info">
                                    <p>1tr lượt xem <sup>.</sup> 10 giờ trước</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="playlist clearfix more more-videos">
                        <a href="#">
                            <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/m-kLlUOq8fg/mqdefault.jpg');">
                                <img src="https://vietcetera.com/images/outline/Play.svg">
                                <p>4:27</p>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>Vũ Đinh Trọng Thắng - Ngọt: Viết nhạc đừng nổi tiếng | Have A Sip
                                        EP30</strong>
                                </div>
                                <div class="item-info">
                                    <p>1tr lượt xem <sup>.</sup> 10 giờ trước</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/qCt0-w1dX2o/mqdefault.jpg');">
                                <img id="pause" src="https://vietcetera.com/images/outline/Play.svg">
                                <p>2:18</p>
                            </div>
                            <div class="video-info">
                                <div class="item-title">
                                    <strong>Bảo Nguyễn, Giám đốc quốc gia tại Salesforce: Dùng công nghệ để phát
                                        triển | Vietnam Innovators EP28</strong>
                                </div>
                                <div class="item-info">
                                    <p>1tr lượt xem <sup>.</sup> 10 giờ trước</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--button see more videos-->
        <div class="btn-seemore btn-videos">
            <button id="seemore">
                XEM THÊM
                <span></span>
            </button>
        </div>
    </div>
</article>
@endsection
