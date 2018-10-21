<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.sidebar', function ($view){

            
            $archives = \App\Post::archives();

            //only retrieve tags if they have posts associated with them
            $tags =  \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));

        });

        view()->composer('posts.entry', function ($view){
            //only retrieve tags if they have posts associated with them
            $tags =  \App\Tag::has('posts')->pluck('name');

            $view->with(compact('tags'));

        });

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
