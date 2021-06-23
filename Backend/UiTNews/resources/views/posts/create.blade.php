@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title </label>
                            <input type="text" name="title" class="form-control mt-4" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body </label>
                            <textarea name="body" rows="10" cols="30" class="form-control mt-4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Image</label>
                            <textarea name="bodyimage" rows="10" cols="30" class="form-control mt-4" required></textarea>
                        </div>
                        <div>
                        <div class="form-group">
                            <label for="type">Choose a type  </label>
                            <select id="type" name="type">
                                @foreach ($types as $type)
                                    <option value={{$type->id}}>{{$type->TYPE_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success mt-4" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection