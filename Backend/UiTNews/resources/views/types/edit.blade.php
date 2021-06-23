@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Type</div>
                <div class="card-body">
{!! Form::model($type,['method'=>'PUT','action'=>['App\Http\Controllers\TypesController@update',$type->id]]) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$type->TYPE_NAME,['class'=>'form-control mt-4'])!!}
        {!! Form::submit('Update Type',['class'=>'btn btn-info mt-4'])!!}
    </div>
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection
