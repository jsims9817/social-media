@extends('layouts.app')

@section('content')

<div class="video_sample video_single">
  <h2 class="video-title">{{ $video->title }}</h2>
  <p class="video-meta">{{ $video->created_at->toFormattedDateString() }} <a href="#">@if (Auth::check()) by {{ $video->user->name }} @endif</a></p>
  <iframe src="{{ $video->embed }}" frameborder="0" allowfullscreen></iframe>
  <p class="body_copy">{{ $video->body }}</p>
  <div class="row">
    <div class="col-sm-6"><a href="/public/{{ $video->link }}">Public Link</a></div>
    <div class="col-sm-6">
          <form method="post" action="/videos/{{ $video->id }}">
            {{ method_field('DELETE') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input name="id" class="form-control" value="{{ $video->id }}" type="hidden">
            <button type="submit" class="my_btn">Delete</button>
          </form>
    </div>
  </div>
</div><!-- /.blog-post -->

@endsection
