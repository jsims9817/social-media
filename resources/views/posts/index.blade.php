@extends('layouts.app')


@section('content')

<div class="row video_group">
  @foreach ($posts as $post)
  <div class="col-sm-4">
    <div class="video_sample">
      <a href="/posts/{{ $post->id }}"><h2 class="video-title">{{ $post->title }}</h2></a>
      <p class="video-meta">{{ $post->created_at->toFormattedDateString() }} @if (Auth::check()) by {{ $post->user->name }} @endif</p>
      <img src="{{ $post->image }}" style="max-width: 250px;">
      <p class="body_copy yet_another">{{ $post->body }}</p>
    </div><!-- /.blog-post -->
  </div>
  @endforeach
</div>

@endsection
