@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manager With Multiple Videos Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../css/manageVideos.css">

    </head>
    <body>

                <div class="containerCreate">
                    <h1 class="text-center text-danger"><b>Edit Video</b> </h1>
                    <br />
				    <div class="form-group">
                        <form method="post" action="{{ route('videos.update', $video->id) }}">
                           @csrf
                            @method('put')
                         <input type="text" name="VIDEO_TITLE" class="form-control form-control-lg m-2" placeholder="Title" value="{{ $video->VIDEO_TITLE }}" required>
                         <input type="url" name="VIDEO_FILE" class="form-control form-control-lg m-2" placeholder="Link" value="{{ $video->VIDEO_FILE }}" required>
                         <Textarea name="VIDEO_DESCRIPTION" cols="20" rows="4" class="form-control form-control-lg m-2" placeholder="Description" required>{{ $video->VIDEO_DESCRIPTION }}</Textarea>
                         <input type="text" name="VIDEO_AUTHOR" class="form-control form-control-lg m-2" placeholder="Author" value="{{ $video->VIDEO_AUTHOR }}" required>
                         <input type="text" name="VIDEO_ORIGIN" class="form-control form-control-lg m-2" placeholder="Origin" value="{{ $video->VIDEO_ORIGIN }}" required>
                         <select name="VIDEO_TYPE" class="form-control form-control-lg m-2" placeholder="Type" value="{{ $video->VIDEO_TYPE }}" required>
                            <option value="??m nh???c">??m nh???c</option>
                            <option value="Th??? thao">Th??? thao</option>
                            <option value="Ti???ng Anh">Ti???ng Anh</option>
                            <option value="H???c thu???t">H???c thu???t</option>
                            <option value="N???u ??n">N???u ??n</option>
                            <option value="L??m ?????p">L??m ?????p</option>
                            <option value="Du l???ch">Du l???ch</option>
                            <option value="Tin t???c">Tin t???c</option>
                            <option value="S???c kho???">S???c kho???</option></select>
                        <button type="submit" class="btn btn-lg btn-danger mt-3">Submit</button>
                        </form>
                   </div>
                </div>
         </body>
</html>
@endsection
