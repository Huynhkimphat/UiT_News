@extends('layouts.app')
{{-- @section('header')
@extends('layouts.header')
@endsection --}}
@section('footer')
@extends('layouts.footer')
@endsection

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
                                        <h3>C???m gi??c r??ng m??nh khi nghe ASMR ?????n t??? ????u?</h3>
                                        <p>10 TH 5</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.vietcetera.com/uploads/images/06-may-2021/lovephobia-feature-768x432.jpg" class="d-block w-100">
                                <div class="carousel-caption ">
                                    <a class="carousel-title" href="#">
                                        <h3>8 N???i ??m ???nh khi???n t??nh y??u ch???ng h??? d??? d??ng</h3>
                                        <p>10 TH 5</p>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.vietcetera.com/uploads/images/05-may-2021/210505-phimdo-feature-768x432.jpg" class="d-block w-100">
                                <div class="carousel-caption">
                                    <a class="carousel-title" href="#">
                                        <h3>T???i sao bi???t phim d??? ta v???n xem?</h3>
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
                                        <h4 class="card-title">V?? sao l??u l??u ngh?? m???t ?????ng n??i m???t n???o?</h4>
                                    </a>
                                    <p class="card-text content" id="hidden">Hi???n t?????ng ???ngh?? m???t ?????ng n??i m???t n???o??? kh??ng ph???i c???a ri??ng ai. Ca s?? ?????n ??i???p kh??c v???n qu??n l???i. MC ?????n h???i gay c???n v???n ?????c nh???m t??n hoa h???u.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/06-may-2021/210426-metime-feature-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Th??? R???i Th??ch: D??nh th???i gian cho b???n th??n m?? kh??ng th???y t???i l???i</h4>
                                    </a>
                                    <p class="card-text content" id="hidden">C??ng vi???c v?? tr??ch nhi???m ????i khi khi???n b???n th???y t???i l???i n???u mu???n d??nh th???i gian cho m??nh. 5 B?????c sau ????y s??? gi??p b???n t??m l???i th???i gian ch??m s??c b???n th??n.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/21-apr-2021/bonao2-optim-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">V?? sao khi nh??n l??u v??o m???t t???, ta b???ng c???m th???y l??? l???m?
                                        </h4>
                                    </a>
                                    <p class="card-text content" id="hidden">????i khi vi???c ?????c b???ng tr??? n??n th???t kh?? kh??n v?? nh??n ch???... ch??? hi???u g?? c???.</p>
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
                                <a href="#"><strong>L??m sao ????? m??? l??ng m?? kh??ng g??y phi???n l??ng?</strong></a>
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
                                <a href="#"><strong>Lewandowski ti???m c???n k??? l???c c???a Gerd Muller</strong></a>
                                <p class="content">Ti???n ?????o Robert Lewandowski ch??? thi???u m???t pha l???p c??ng ????? b???t k???p k??? l???c ghi b??n trong m???t m??a gi???i Bundesliga do Gerd Muller l???p c??ch ????y 49 n??m.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://i1-suckhoe.vnecdn.net/2021/05/11/PHAM5615JPG-1620693895-2683-1620693986.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=eTcz_1zwJOF4WiSpv6QMNQ">
                                <a href="#"><strong>nCoV li??n quan vi???n Nhi???t ?????i l?? bi???n ch???ng ???n ?????</strong></a>
                                <p class="content">Vi???n V??? sinh d???ch t??? Trung ????ng gi???i tr??nh t??? gene virus 7 m???u b???nh ph???m li??n quan t???i B???nh vi???n B???nh nhi???t ?????i Trung ????ng c?? s??? 2, k???t qu??? cho th???y nhi???m bi???n ch???ng t??m th???y ??? ???n ?????.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/VNENano-1620701911-1590-1620701972.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=hj2ivjo834kHmHc-HMtMLw">
                                <a href="#"><strong>B???y nano c?? th??? ti??u di???t nhi???u bi???n ch???ng nCoV</strong></a>
                                <p class="content">C??c nh?? nghi??n c???u ??? ?????i h???c Chicago s??? d???ng h???t nano ????? 'b???t' nCoV b??n trong c?? th???, s??? d???ng d?????i d???ng x???t m??i.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1 more more-news ">
                                <img src="https://img.vietcetera.com/uploads/images/10-may-2021/thumb-kem-chong-nang-768x432-1620634115896.jpg">
                                <a href="#"><strong>L???t t???y SPF - Li???u c?? n??n tin v??o kem ch???ng n???ng?</strong></a>
                                <p class="content">Ch??? s??? SPF c???a kem ch???ng n???ng ng??y c??ng cao li???u c?? gi??p ch??ng ta tho??t kh???i c??c tia ?????c h???i hay s??? th???t ????y ch??? l?? nh???ng con s??? ???o?</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1 more more-news ">
                                <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/vacuna-covid-nuevomexico-16207-6292-5071-1620739635.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=Q0b7JMR5h0SHGT-tIaHKUQ">
                                <a href="#"><strong>M??? ??au ?????u x??? l?? vaccine th???a.</strong></a>
                                <p class="content">M???t s??? bang M??? t???ng mong m???i nh???n ???????c nhi???u li???u vaccine Covid-19 nh???t c?? th???, gi??? ????y, h??? ??ang th???a vaccine khi cung l???n h??n c???u.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
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
                                            <p>{{$video->VIDEO_VIEW}} l?????t xem <sup>.</sup> {{$video->VIDEO_AUTHOR}}</p>
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

    <script src="../js/homepage.js"></script>
@endsection
