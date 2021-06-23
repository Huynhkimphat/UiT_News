@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
{!! Form::model($POST_TYPE_ID,['method'=>'PUT','action'=>['App\Http\Controllers\PostsController@update',$POST_TYPE_ID->id]]) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$post->POST_TITLE,['class'=>'form-control mt-4'])!!}
        {!! Form::textarea('body',$post->POST_CONTENT,['class'=>'form-control mt-4'])!!}
        {!! Form::textarea('bodyimage',$post->POST_IMAGE,['class'=>'form-control mt-4'])!!}
        <P></P>
        <div>
            <label for="cars">Choose a type  </label>
            <select id="type" name="type">
                @foreach ($types as $type)
                    <option value={{$type->id}}>{{$type->TYPE_NAME}}</option>
                @endforeach
            </select>
           </select>
        </div>
        {!! Form::submit('Update Post',['class'=>'btn btn-info mt-4'])!!}
    </div>
   
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection
