@extends('admin.layout.index')

@section('menu2')   active  @endsection

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">UPDATE POST</h4>

                            </div>
                        </div>
                        <div class="card-body">

                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                            @endforeach


                            {{-- FORM ADD --}}

                            <form action="{{ route('posts.update',$post->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="">TYPE</label>
                                            <select name="POST_TYPE_ID" class="form-control" required>
                                                @foreach ($types as $types)
                                                 <option  <?php if($types->id==$post->POST_TYPE_ID) echo "selected" ?> value=" {{ $types->id }} ">{{ $types->TYPE_NAME }}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST TITLE</label>
                                            <input type="text" name="POST_TITLE" class="form-control" value="{{ $post->POST_TITLE }}"   required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST DESCRIPT</label><br>
                                            <textarea name="POST_DESCRIPT" class="form-control" cols="100" rows="4" required placeholder="POST DESCRIPT......">{{ $post->POST_DESCRIPT }}</textarea>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST CONTENT</label>
                                            <textarea required class="form-control" name="POST_CONTENT" id="noi_dung" rows="5" required>{{ $post->POST_CONTENT }}</textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="exampleFormControlFile1">POST IMAGE</label>
                                                @if (!empty ($post->POST_IMAGE))
                                                    <img  style="width: 100px;height:100px" src="http://uitnews.local/file/post/{{$post->POST_IMAGE}}" class="thumbnail">
                                                @endif
                                            <input  type="file" name="POST_IMAGE" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >Author Name</label>
                                            <input type="text" name="POST_AUTHOR_NAME" class="form-control"  value="{{ $post->POST_AUTHOR_NAME }}"   required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST ORIGIN</label>
                                            <input type="text" name="POST_ORIGIN" class="form-control"    value="{{ $post->POST_ORIGIN }}"   required>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" id="" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

