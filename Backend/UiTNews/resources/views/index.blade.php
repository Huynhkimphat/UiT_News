<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  {{-- Here for header --}}
  <div class="categories">
    {{-- <section class="category-section">
      <button class="category active">All Videos</button>
    </section> --}}
  </div>
  <div class="videos">
    <section class="video-section">
        @foreach ($videos as $video)
      <article class="video-container">
        <a href="{{ route('videos.show', $video->id) }}" class="thumbnail">
            <iframe width="350" height="250" src="{{ $video->VIDEO_FILE }}" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        <div class="video-bottom-section">
          <div class="video-details">
            <a href="{{ route('videos.show', $video->id) }}" class="video-title">{{ $video->VIDEO_TITLE }}</a>
            <a href="{{ route('videos.show', $video->id) }}" class="video-channel-name">{{ $video->VIDEO_AUTHOR }}</a>
            <div class="video-metadata">
              <span>{{ $video->VIDEO_VIEW }} lượt xem</span>
              •
              <span>{{ $video->VIDEO_ORIGIN }}</span>
            </div>
          </div>
        </div>
      </article>
        @endforeach
    </section>
  </div>
</body>
</html>
