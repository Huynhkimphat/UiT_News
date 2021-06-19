@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
{!! Form::model($post,['method'=>'PUT','action'=>['App\Http\Controllers\PostsController@update',$post->id]]) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$post->POST_TITLE,['class'=>'form-control mt-4'])!!}
        {!! Form::textarea('body',$post->POST_CONTENT,['class'=>'form-control mt-4'])!!}
        {!! Form::submit('Update Post',['class'=>'btn btn-info mt-4'])!!}
    </div>
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection
