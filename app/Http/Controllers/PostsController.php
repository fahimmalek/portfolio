<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index(){


          $posts = Post::all();

          return view('posts.index', compact('posts'));

  }

    public function show(Post $post)

        {
          return view('posts.show', compact('post'));

        }

    public function create(Post $post)

        {
          return view('posts.create');

        }


    public function store()

        {

          $post = new Post;
          $post->title = request('title');
          $post->body = request('body');

          $post->save();

          return redirect('/');

          dd(request('body'));

        }

}
