@extends('layouts.app')

@section('content')
@foreach ($posts as $post)
<div class="carousel-item active">
    <img src="{{$post->POST_IMAGE}}" class="d-block w-100">
    <div class="carousel-caption ">
        <a class="carousel-title" href="#">
            <h3>{{$post->POST_TITLE}}</h3>
            <p>{{$post->created_at}} </p>
        </a>
    </div>
</div>
@endsection