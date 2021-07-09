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

        <div class="container" style="margin-top: 50px;">

            <h3 class="text-center text-danger"><b>Laravel CRUD With Multiple Videos Upload</b> </h3>
            <a href="{{ route('videos.create') }}" class="btn btn-outline-success">Add New Video</a>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Origin</th>
                    <th>Type</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($videos as $video)
                 <tr>
                       <th scope="row">{{ $video->id }}</th>
                       <td>{{ $video->VIDEO_TITLE }}</td>
                        <td><iframe width="560" height="315" src="{{ $video->VIDEO_FILE }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                       <td>{{ $video->VIDEO_DESCRIPTION }}</td>
                       <td>{{ $video->VIDEO_AUTHOR }}</td>
                       <td>{{ $video->VIDEO_ORIGIN }}</td>
                       <td>{{ $video->VIDEO_TYPE }}</td>
                       <td>{{ $video->VIDEO_VIEW }}</td>

                       <td><a href="{{ route('videos.edit', $video->id) }}" class="btn btn-outline-primary">Edit</a></td>
                       <td>
                           <form action="{{ route('videos.destroy', $video->id) }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>

                   </tr>
                @endforeach
                </tbody>
              </table>
        </div>
