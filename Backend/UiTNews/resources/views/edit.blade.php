<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Videos Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px; ">
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Edit Video</b> </h3>
                   
				    <div class="form-group">
                        <form method="post" action="{{ route('videos.update', $video->id) }}">
                           @csrf
                            @method('put')
                         <input type="text" name="VIDEO_TITLE" class="form-control m-2" placeholder="Title" value="{{ $video->VIDEO_TITLE }}">
                         <input type="url" name="VIDEO_FILE" class="form-control m-2" placeholder="Link" value="{{ $video->VIDEO_FILE }}">
                         <Textarea name="VIDEO_DESCRIPTION" cols="20" rows="4" class="form-control m-2" placeholder="Description" value="{{ $video->VIDEO_DESCRIPTION }}"></Textarea>
                         <input type="text" name="VIDEO_AUTHOR" class="form-control m-2" placeholder="Author" value="{{ $video->VIDEO_AUTHOR }}">
                         <input type="text" name="VIDEO_ORIGIN" class="form-control m-2" placeholder="Origin" value="{{ $video->VIDEO_ORIGIN }}">
                         {{-- <input type="text" name="VIDEO_TYPE_ID" class="form-control m-2" placeholder="Type" value="{{ $video->VIDEO_TYPE_ID }}"> --}}
                         <select name="VIDEO_TYPE_ID" class="form-control m-2" placeholder="Type" value="{{ $video->VIDEO_TYPE_ID }}">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option></select>
                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>
