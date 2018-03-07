@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-9 article-grid pull-left">
            <a href="{{ url('/posts/create') }}" class="btn btn-default btn-charcoal pull-left"><span>Submit Article</span></a>
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

            <div class="horizontal clearfix row">
                <div class="col-5 text">
                    <h1>Business</h1>
                    <h2>New Stuff Coming This Fall</h2>

                    <p>Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum <strong>dolore eu fugiat
                    nulla</strong> pariatur sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit...</p>

                    <a href="article.html" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                </div>
                <div class="col-7 image">
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

            <div class="flexbox">

              @foreach ($posts as $post)

              <div class="vertical">
                  <div class="image">
                      <img src="{{ $post->image }}" />
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
                      <h2>{{ $post->title }}</h2>
                      <p class="video-meta">{{ $post->created_at->toFormattedDateString() }} @if (Auth::check()) by {{ $post->user->name }} @endif</p>
                      <p>{{ $post->body }}</p>
                      <a href="/posts/{{ $post->id }}" class="btn btn-default btn-dotted pull-left"><span>Read More</span></a>
                  </div>
              </div>
              @endforeach

            </div>




        </div>
        <div class="col-3 sidebar pull-right">
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
            </ul>
        </div>
    </div>
</div>



<div class="row video_group">

</div>

@endsection
