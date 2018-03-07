<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Daily Smarty</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/storage/app/public/favicon.png"/>
  </head>

  <body>

<!--  HEADER -->

<div class="grey2"></div>

<div id="header">
    <div class="container">
        <div class="row">
            <div class="grey"></div>
            <a class="col-3 logo pull-left" href="/">
                <img src="/images/common/logo.png" alt="dailysmarty">
                <img class="logo-small" src="/images/common/logo_small.png" alt="dailysmarty">
            </a>
            <div class="col-6"></div>
            <div class="col-3 pull-left">
                <div class="col-12 avatar pull-right">
                    <a href="stats.html">
                        <div class="mask"></div>
                        <img src="/images/common/guest_image.png">
                    </a>
                    @if (Route::has('login'))
                            @auth
                                <strong>Welcome {{ Auth::user()->name }}!</strong>
                                <a href="{{ url('/logout') }}">Logout</a>
                            @else
                                <strong>Welcome Guest!</strong>
                                <a href="{{ url('/login') }}">Login</a> or
                                <a href="{{ url('/register') }}">Register</a>
                            @endauth
                    @endif
                    @if (Auth::check())

                    @endif

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div id="main-menu" class="small">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>


<!--  CONTENT -->

@yield('content')




<!--  FOOTER -->


<div id="footer" class="blue">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="pull-left">
                    <li><a href="index.html">Home</a>/</li>
                    <li><a href="faq.html"  class="active">FAQ</a>/</li>
                    <li><a  href="contact.html">Contact</a>/</li>
                    <li><a href="affiliate.html">Affiliate</a>/</li>
                    <li><a href="pricing.html">Pricing</a></li>
                </ul>
                <p class="copyright pull-right">Copyright © 2015 <strong>Daily Smarty.</strong> All rights reserved. </p>
            </div>
        </div>
    </div>
</div>







    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
