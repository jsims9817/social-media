@extends('layouts.app')

@section('content')

<?

//CRASH COURSE

// method="POST" action="/post"
// OR method="POST" action="/post/{id}"
// Submit a new post to the database.

// method="GET" action="/posts/{id}/edit"
// OR method="PATCH" action="/posts/{id}"
// Edit an current post.

// method="DELETE" action="/posts/{id}"
// Edit an current post.

?>

  <div class="container smaller_container_2 add_video_wrap">
    <h3 style="margin-top: 50px;">Add a video</h3>
    <hr>
    <form method="POST" action="/videos">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
      </div>
      <div class="form-group">
        <label for="embed">Embed</label>
        <textarea class="form-control" id="embed" name="embed"></textarea>
      </div>
      <button type="submit" class="">Publish</button>
    </form>
  </div>
  @include('layouts.errors')

@endsection
