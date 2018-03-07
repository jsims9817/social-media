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
    <h3 style="margin-top: 50px;">Create a Post</h3>
    <hr>
    @include('layouts.errors')
    <form method="POST" action="/posts">
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
        <label for="embed">Link</label>
        <input type="text" class="form-control" id="link" name="link"></input>
      </div>
      <button type="submit" class="">Publish</button>
    </form>
  </div>





  <style>

  #footer {
      height: 100px;
      position: absolute;
      width: 100%;
      bottom: 0;
  }

  div.grey2 {
    background: transparent;
  }

  </style>

@endsection
