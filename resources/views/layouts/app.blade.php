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



<!--  NEW CONTENT -->

<div class="grey2"></div>

<div id="header">
    <div class="container">
        <div class="row">
            <div class="grey"></div>
            <a class="col-xs-3 logo pull-left" href="index.html">
                <img src="/storage/app/public/images/common/logo.png" alt="dailysmarty">
                <img class="logo-small" src="/storage/app/public/images/common/logo_small.png" alt="dailysmarty">
            </a>
            <div class="col-xs-9 pull-left">
                <div class="col-xs-6 pull-left">
                    <span class="icon icon-search"></span>
                    <input type="text" placeholder="Search..."/>
                </div>
                <div class="col-xs-3 avatar pull-right">
                    <a href="stats.html">
                        <div class="mask"></div>
                        <img src="images/common/guest_image.png">
                    </a>
                    <strong>Welcome Guest!</strong>
                    <a href="#signup">Login</a> or
                    <a href="#register">Register</a>
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

<div class="container">
    <div class="row">
        <div class="col-xs-9 article-grid pull-left">
            <a href="#accept-article" class="btn btn-default btn-charcoal pull-left"><span>Submit Article</span></a>
            <ul class="filter pull-right">
                <li>Top Now</li>
                <li>Most Recent</li>
                <li class="active">Today</li>
                <li>This Week</li>
                <li>All Time</li>
            </ul>

            <a href="#show-categories" class="btn btn-default btn-blue pull-right show-categories"><span>Categories</span></a>
            <select data-class="filter-select pull-right blue filter-sort" name="type" class="filter-sort pull-right">
                <option value="english">Top Now</option>
                <option value="french" selected="selected">Most Recent</option>
                <option value="french">Today</option>
                <option value="french">This Week</option>
                <option value="french">All Time</option>
            </select>
            <div class="clearfix"></div>

            <div class="horizontal clearfix">
                <div class="col-xs-5 text">
                    <h1>Business</h1>
                    <h2>New Stuff Coming This Fall</h2>

                    <p>Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum <strong>dolore eu fugiat
                    nulla</strong> pariatur sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>

                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
                <div class="col-xs-7 image">
                    <img src="images/image1.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
            </div>

            <div class="vertical">
                <div class="image">
                    <img src="images/image2.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
                <div class="text">
                    <h2>New Stuff Coming This Fall</h2>
                    <p>Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum <strong>dolore eu fugiat</strong>
                    nulla pariatur sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>
                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
            </div>

            <div class="vertical padding featured">
                <div class="image">
                    <img src="images/image3.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
                <div class="text">
                    <h2>New Stuff Coming This Fall</h2>
                    <p>Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur sunt in culpa <strong>qui officia
                    deserunt</strong> mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>
                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
            </div>

            <div class="horizontal clearfix">
                <div class="col-xs-5 text">
                    <h2 style="margin-top:0px;">New Stuff Coming This Fall</h2>

                    <p>Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum <strong>dolore eu fugiat
                    nulla</strong> pariatur sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>

                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
                <div class="col-xs-7 image">
                    <img src="images/image4.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
            </div>

            <div class="vertical">
                <div class="image">
                    <img src="images/image3.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
                <div class="text">
                    <h2>New Stuff Coming This Fall</h2>
                    <p>Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum <strong>dolore eu fugiat</strong>
                    nulla pariatur sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>
                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
            </div>

            <div class="vertical padding featured">
                <div class="image">
                    <img src="images/image2.png" />
                    <ul class="stats">
                        <li>
                            <span class="icon icon-view"></span>
                            <p>369</p>
                        </li>
                        <li>
                            <span class="icon icon-comment"></span>
                            <p>36</p>
                        </li>
                        <li>
                            <span class="icon icon-relations"></span>
                            <p>52</p>
                        </li>
                    </ul>
                    <div class="featured"></div>
                </div>
                <div class="text">
                    <h2>New Stuff Coming This Fall</h2>
                    <p>Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur sunt in culpa <strong>qui officia
                    deserunt</strong> mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>
                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
            </div>

        </div>
        <div class="col-xs-3 sidebar pull-right">
            <ul>
                <li><a href="#">All</a></li>
                <li class="active"><a href="#">Business</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Leisure</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Offbeat</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Leisure</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Offbeat</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Leisure</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Offbeat</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Leisure</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Offbeat</a></li>
                <li><a href="#">Politics</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="footer" class="blue">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
