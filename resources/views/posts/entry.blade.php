<div class="blog-post">

  <h2 class="blog-post-title">
    <a href="/posts/{{$post->id}}">
      {{$post->title}}
    </a>

      @foreach ($post->tags as $tag)
       <a href="/posts/tags/{{$tag->name}}">  <button type="button" class="btn btn-info btn-sm">{{$tag->name}}</button></a>
      @endforeach

      <!--make sure the logged in user's id matches the user id of the person that published the post-->
      
        @if(!is_null($post->user) && $post->user->id==auth()->user()->id)

              <form action="/posts/delete/{{$post->id}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>

         @endif

  </h2>

  <p class="blog-post-meta"> {{$post->created_at->toFormattedDateString()}} by

    @if (!is_null($post->user))

      {{$post->user->name}}
      </p>

    @else

      Deleted
      </p>
    @endif

  {{$post->body}}

</div><!-- /.blog-post -->
