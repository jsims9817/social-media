@extends('layouts.app')

@section('content')

<div class="video_sample video_single public_video">
  <h2 class="video-title">{{ $video->title }}</h2>
  <p class="video-meta">{{ $video->created_at->toFormattedDateString() }}</p>
  <iframe src="{{ $video->embed }}" frameborder="0" allowfullscreen></iframe>
  <p class="body_copy">{{ $video->body }}</p>
</div><!-- /.blog-post -->

@endsection
