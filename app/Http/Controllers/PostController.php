<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class PostController extends Controller
{

    public function __construct() {
      $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $posts)
    {
      $posts = $posts->all();
      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
          'link' => 'required',
          'title' => 'required',
          'body' => 'required',
        ]);

        // Create a new post with given data
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->link = request('link');
        $post->image = 'https://picsum.photos/3000/2000/?random';
        $post->user_id = auth()->id();

        // Save to database
        $post->save();


        //auth()->user()->publish(
        //  new Video(request(['title', 'body', 'embed']))
        //);


        // Redirect
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $id = $request->id;
      $nCard= Video::find($id);
      $nCard->delete();
      return redirect('/posts');
    }
}
