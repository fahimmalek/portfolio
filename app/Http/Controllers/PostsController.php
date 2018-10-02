<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function __construct()
    {

      $this->middleware('auth')->except(['index', 'show']);

    }


    public function index(){


          //return session('message');

          //orderby('created_at', 'asc')->get()
          $posts = Post::latest()
          
            ->filter(request(['month', 'year']))
            
            ->get();
          
          return view('posts.index', compact('posts'));
        }

    public function show(Post $post)

        {
          return view('posts.show', compact('post'));

        }

    public function create()

        {
          return view('posts.create');

        }

        public function new()
        {
          return view('posts.new');
        }


    public function store()

        {
          $this->validate(request(), [

              'title' => 'required',
              'body' => 'required',

          ]);

          auth()->user()->publish(

            new Post(request(['title', 'body']))

          );

          session()->flash('message', 'Your post has now been published.');

          return redirect('/');

        }

}
