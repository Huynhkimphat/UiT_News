@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ $post->POST_TITLE }}</p>
                    <p>Views: {{ $post->POST_VIEW }}</p>
                    <p>
                        {{ $post->POST_CONTENT }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection