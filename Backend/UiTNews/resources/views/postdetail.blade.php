
 @extends('layouts.app')
@section('content')
<div class="cover">
    <div class="container">
        <div class="row">
            <div class="col-12 white-background">
                <div class="single_post_area">
                    <h2 class="post_title wow ">{{ $post->POST_TITLE }}</h2>
                    <a  class="author_name"><i class="fa fa-user"></i> {{ $post->POST_AUTHOR_NAME }}</a> <i class="fa fa-clock-o"></i>{{ date_format($post->created_at,"d/m/Y H:i:s") }}
                    </a>

                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true" style="left: 160px; top:15px ;margin-left: 25%;"></div>

                    <div class="single_post_content">
                        {!! $post->POST_CONTENT !!}
                       <hr>
                        <h4> Add Comment </h4>
                        @include('comment')
                    </div>
                </div>
                <div class="" style="text-transform:uppercase; font-size:2rem; font-weight:bold;text-align:center; padding-top:20px">
                    Shared Post</div>
                <div class="social_area wow fadeInLeft">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="related_post">
                    <h2 class="wow fadeInLeftBig">Related Posts you may like <i class="fa fa-thumbs-o-up"></i></h2>
                    <div class="recentpost_nav relatedpost_nav wow fadeInDown animated">
                        @foreach ($post_related as $post)
                        <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='http://uitnews.local/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li>
                        @endforeach
                        {{-- <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='public/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li>
                        <li>
                            <a href="{{ route('postdetail.show',$post->id ) }}"> <img alt="" src='public/file/post/{{$post->POST_IMAGE}}'></a>
                            <a href="#" class="recent_title">{{$post->POST_TITLE}}</a>
                        </li> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
