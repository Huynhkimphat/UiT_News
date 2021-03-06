@extends('layouts.app')
@section('content')
    <article id="news-video">
        <div class="row d-flex justify-content-center">
            <!--post 4-->
            <div class="col-md-12 col-12">

                <div class="left-board clearfix">
                    <div class="news-roller">
                        @foreach ($posts as $post)
                            <div class="slot1">

                                <img src='public/file/post/{{$post->POST_IMAGE}}' >
                                <a href="{{ route('postdetail.show',$post->id ) }}"><strong>  {{$post->POST_TITLE}}</strong></a>
                                 <p class="content" font-size: 1.2rem>{{$post->POST_DESCRIPT}}</p>
                                <p class="time" > {{ date_format($post->created_at,"d/m/Y H:i:s") }}   </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </article>
@endsection
