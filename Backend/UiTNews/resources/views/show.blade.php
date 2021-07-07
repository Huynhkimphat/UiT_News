@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
    </script>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
     {{-- Styles --}}
    <link href="../css/homepage.css" rel="stylesheet">
</head>

<body>
    <main>
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
                            <div class="carousel-item active">
                                <img src="https://img.vietcetera.com/uploads/images/07-may-2021/210507-asmr-feature-768x432-1620387532011.jpg" class="d-block w-100">
                                <div class="carousel-caption ">
                                    <a class="carousel-title" href="#">
                                        <h3>Cảm giác rùng mình khi nghe ASMR đến từ đâu?</h3>
                                        <p>10 TH 5</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.vietcetera.com/uploads/images/06-may-2021/lovephobia-feature-768x432.jpg" class="d-block w-100">
                                <div class="carousel-caption ">
                                    <a class="carousel-title" href="#">
                                        <h3>8 Nỗi ám ảnh khiến tình yêu chẳng hề dễ dàng</h3>
                                        <p>10 TH 5</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.vietcetera.com/uploads/images/05-may-2021/210505-phimdo-feature-768x432.jpg" class="d-block w-100">
                                <div class="carousel-caption">
                                    <a class="carousel-title" href="#">
                                        <h3>Tại sao biết phim dở ta vẫn xem?</h3>
                                        <p>10 TH 5</p>
                                    </a>
                                </div>
                            </div>
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
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/13-may-2021/210512-nghianoib-feature-2-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Vì sao lâu lâu nghĩ một đằng nói một nẻo?</h4>
                                    </a>
                                    <p class="card-text content" id="hidden">Hiện tượng “nghĩ một đằng nói một nẻo” không phải của riêng ai. Ca sĩ đến điệp khúc vẫn quên lời. MC đến hồi gay cấn vẫn đọc nhầm tên hoa hậu.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                        </div>
                    </div>
                </div>
                <div class="col-md-5 " id="latest">
                    <div class="board clearfix">
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
                                <a href="#"><strong>Làm sao để mở lòng mà không gây phiền lòng?</strong></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <hr>
        <article id="news-video">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-12">
                    <h2>NEWS</h2>
                    <div class="left-board clearfix">
                        <div class="news-roller">
                            <div class="slot1">
                                <img src="https://i1-thethao.vnecdn.net/2021/05/09/Lewuy-jpeg-2081-1620529059.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dfQ1CKZmL8O8nk75d8fK7A">
                                <a href="#"><strong>Lewandowski tiệm cận kỷ lục của Gerd Muller</strong></a>
                                <p class="content">Tiền đạo Robert Lewandowski chỉ thiếu một pha lập công để bắt kịp kỷ lục ghi bàn trong một mùa giải Bundesliga do Gerd Muller lập cách đây 49 năm.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
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
                            </div>
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
                    <h2>VIDEOS</h2>
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

    <script src="../js/homepage.js"></script>
@endsection
