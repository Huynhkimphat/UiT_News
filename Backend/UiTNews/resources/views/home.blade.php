@extends('layouts.app')

@section('content')
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
                    {{-- <div class="carousel-item active ">
                        <img src='public/file/post/{{$post_1->POST_IMAGE}}' class="d-block w-100">
                        <div class="carousel-caption ">
                            <a class="carousel-title" href="{{ route('postdetail.show', $post_1->id) }}">

                                    {{$post_1->POST_TITLE}}
                                <p> {{ date_format($post_1->created_at,"d/m/Y H:i:s") }} </p>
                            </a>
                        </div>
                    </div> --}}
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
                                <img src='http://localhost/UiT_News/file/post/{{$post->POST_IMAGE}}' class="d-block w-100">
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
                @endif
                {{-- <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/06-may-2021/210426-metime-feature-768x432.jpg" alt="Card image">
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-title">Thử Rồi Thích: Dành thời gian cho bản thân mà không thấy tội lỗi</h4>
                            </a>
                            <p class="card-text content" id="hidden">Công việc và trách nhiệm đôi khi khiến bạn thấy tội lỗi nếu muốn dành thời gian cho mình. 5 Bước sau đây sẽ giúp bạn tìm lại thời gian chăm sóc bản thân.</p>
                            <p class="time">10 TH 5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/21-apr-2021/bonao2-optim-768x432.jpg" alt="Card image">
                        <div class="card-body">
                            <a href="#">
                                <h4 class="card-title">Vì sao khi nhìn lâu vào một từ, ta bỗng cảm thấy lạ lẫm?
                                </h4>
                            </a>
                            <p class="card-text content" id="hidden">Đôi khi việc đọc bỗng trở nên thật khó khăn vì nhìn chữ... chả hiểu gì cả.</p>
                            <p class="time">10 TH 5</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--post 3 bên phải-->
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
            {{-- <div class="board clearfix">
                <div class="news-roller">
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/07-may-2021/techlimits-feature-768x432-1620374549751.jpg">
                        <a href="#"><strong>Thử Rồi Thích: Tối giản cách bạn tiêu thụ thông tin</strong></a>
                        <p class="content" id="hidden">6 Bước làm chủ cuộc sống trực tuyến của bạn bằng cách đặt ra giới hạn trong việc tiêu thụ thông tin.</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/09-dec-2020/cautoan-feature1-768x432-1607527827958.jpg">
                        <a href="#"><strong>Các kiểu cầu toàn thường gặp: Bạn theo đuổi sự hoàn hảo
                                nào?</strong></a>
                        <p class="content" id="hidden">Không chỉ đơn thuần là sự cầu toàn, một tính cách perfectionist còn có thể được chia ra thành nhiều loại nữa đấy! Bạn thuộc loại cầu toàn nào sau đây?</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1" id="hidden">
                        <img src="https://img.vietcetera.com/uploads/images/06-may-2021/vulnerability-feature-768x432.jpg">
                        <a href="#">Ơ<strong>Làm sao để mở lòng mà không gây phiền lòng?</strong></a>
                        <p class="content" id="hidden">Nhiều người lầm tưởng mở lòng là thao túng hoặc là phương tiện để trút cảm xúc. Điểm khác nhau giữa chúng là gì?</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1">
                        <img src="https://img.vietcetera.com/uploads/images/11-may-2021/20210511-dien-anh-logo-2-01-768x432.jpg">
                        <a href="#"><strong>Girl From Nowhere 2: Có gì hay và không hay ở 8 tập
                                phim?</strong></a>
                        <p class="content" id="hidden">Bài viết giúp bạn hệ thống lại cả một mùa 2 “xuống sức” thấy rõ của Girl From Nowhere - series Netflix đình đám thời gian gần đây. Bạn thích tập phim nào nhất?</p>
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
                    @foreach ($post_tt as $post)
                            <div class="slot1">
                                <img style="width: 300px;" src='public/file/post/{{$post->POST_IMAGE}}' >
                                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                                <p class="content"id="hidden"> {{$post->POST_DESCRIPT }}</p>
                                {{-- <p class="type">{{ $type->TYPE_NAME }}</p> --}}
                                {{-- <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p> --}}
                            </div>
                        @endforeach
                    {{-- <div class="slot1">
                        <img src="https://i1-suckhoe.vnecdn.net/2021/05/11/PHAM5615JPG-1620693895-2683-1620693986.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=eTcz_1zwJOF4WiSpv6QMNQ">
                        <a href="#"><strong>nCoV liên quan viện Nhiệt đới là biến chủng Ấn Độ</strong></a>
                        <p class="content">Viện Vệ sinh dịch tễ Trung ương giải trình tự gene virus 7 mẫu bệnh phẩm liên quan tới Bệnh viện Bệnh nhiệt đới Trung ương cơ sở 2, kết quả cho thấy nhiễm biến chủng tìm thấy ở Ấn Độ.</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1">
                        <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/VNENano-1620701911-1590-1620701972.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=hj2ivjo834kHmHc-HMtMLw">
                        <a href="#"><strong>Bẫy nano có thể tiêu diệt nhiều biến chủng nCoV</strong></a>
                        <p class="content">Các nhà nghiên cứu ở Đại học Chicago sử dụng hạt nano để 'bắt' nCoV bên trong cơ thể, sử dụng dưới dạng xịt mũi.</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1 more more-news ">
                        <img src="https://img.vietcetera.com/uploads/images/10-may-2021/thumb-kem-chong-nang-768x432-1620634115896.jpg">
                        <a href="#"><strong>Lật tẩy SPF - Liệu có nên tin vào kem chống nắng?</strong></a>
                        <p class="content">Chỉ số SPF của kem chống nắng ngày càng cao liệu có giúp chúng ta thoát khỏi các tia độc hại hay sự thật đây chỉ là những con số ảo?</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div>
                    <div class="slot1 more more-news ">
                        <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/vacuna-covid-nuevomexico-16207-6292-5071-1620739635.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=Q0b7JMR5h0SHGT-tIaHKUQ">
                        <a href="#"><strong>Mỹ đau đầu xử lý vaccine thừa.</strong></a>
                        <p class="content">Một số bang Mỹ từng mong mỏi nhận được nhiều liều vaccine Covid-19 nhất có thể, giờ đây, họ đang thừa vaccine khi cung lớn hơn cầu.</p>
                        <p class="type">Type</p>
                        <p class="time"> 10 TH 5</p>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--button see more news-->
        <div class="btn-seemore btn-news ">
            <button id="seemore">
                XEM THÊM
                <span></span>
            </button>
        </div>
        {{-- Render the latest Videos --}}
        <div class="col-md-5 col-12">
            <h2><a href="{{ route('videos.index') }}">VIDEOS</a></h2>
            <div class="board clearfix">
                <div class="news-roller">
                    <div class="playlist clearfix">
                        @foreach ($latestVideos as $video)
                        <a href="{{ route('videos.show', $video->id) }}">
                            <div class="thumbnails">
                                <iframe width="250" height="150" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>{{ $video->VIDEO_TITLE }}</strong></div>
                                <div class="item-info">
                                    <p>{{$video->VIDEO_VIEW}} lượt xem <sup>.</sup> {{$video->VIDEO_AUTHOR}}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="playlist clearfix more more-videos">
                        @foreach ($latestVideosMore as $video)
                        <a href="{{ route('videos.show', $video->id) }}">
                            <div class="thumbnails">
                                <iframe width="250" height="150" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="video-info">
                                <div class="item-title">
                                    <strong>{{ $video->VIDEO_TITLE }}</strong></div>
                                <div class="item-info">
                                    <p>{{$video->VIDEO_VIEW}} lượt xem <sup>.</sup> {{$video->VIDEO_AUTHOR}}</p>
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
                XEM THÊM
                <span></span>
            </button>
        </div>
    </div>
</article>

</main>
<!--see more both-->
<div class="btn-seemore btn-news-videos">
<button id="seemore">
    XEM THÊM
    <span></span>
</button>
</div>
    </div>
</article>
@endsection
