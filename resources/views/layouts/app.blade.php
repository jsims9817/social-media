<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Video Base for Primitive Social</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

  <div class="blog-masthead">
    <div class="container">
      <nav class="nav">
        <a class="nav-link active home_image" href="{{ url('/home') }}"><img src="/images/ps-logo.png"></a>


        <div class="flex_box ml-auto">
          @if (Route::has('login'))
                  @auth
                      <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                      <a class="nav-link" href="{{ url('/videos/create') }}">Add Video</a>
                      <a class="nav-link" href="{{ url('/videos/') }}">Dashboard</a>
                  @else
                      <a class="nav-link" href="{{ url('/login') }}">Login</a>
                  @endauth
          @endif
          @if (Auth::check())
          <a class="nav-link" href="#" style="border-top: solid 8px #fff; font-weight: bold;" >{{ Auth::user()->name }}</a>
          @endif
        </div>
      </nav>
    </div>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-12 blog-main">

        @yield('content')

        <nav class="blog-pagination" style="display: none;">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->


    </div><!-- /.row -->

  </div><!-- /.container -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
