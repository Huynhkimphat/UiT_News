@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ $post->POST_TITLE }}</p>
                    <p>
                        {{ $post->POST_CONTENT }}
                    </p>
                    
                    <p>Views: {{ $post->POST_VIEW }}</p>

                    <hr >
                   <a href ="./{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection