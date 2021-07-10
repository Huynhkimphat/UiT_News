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
                                <h4 class="card-title">CREATE POSTS</h4>

                            </div>
                        </div>
                        <div class="card-body">

                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                            @endforeach


                            {{-- FORM ADD --}}

                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="">TYPE</label>
                                            <select name="POST_TYPE_ID" class="form-control" required>
                                                @foreach ($types as $post)
                                                    <option value=" {{ $post->id }} ">{{ $post->TYPE_NAME }}</option>
                                                 @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST TITLE</label>
                                            <input type="text" name="POST_TITLE" class="form-control"  required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST DESCRIPT</label><br>
                                            <textarea name="POST_DESCRIPT" class="form-control" cols="100" rows="4" required placeholder="POST DESCRIPT......"></textarea>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST CONTENT</label>
                                            <textarea required class="form-control" name="POST_CONTENT" id="noi_dung" rows="5" required></textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="exampleFormControlFile1">POST IMAGE</label>
                                            <input required type="file" name="POST_IMAGE" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >Author Name</label>
                                            <input type="text" name="POST_AUTHOR_NAME" class="form-control"  required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label >POST ORIGIN</label>
                                            <input type="text" name="POST_ORIGIN" class="form-control"   required>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Đóng</button> --}}
                                    <button type="submit" id="" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Post</button>
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

