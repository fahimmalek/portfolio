@extends ('layouts.master')

@section ('content')

<div class="container">
     <h1>{{$post->title}}</h1>

     @if (count($post->tags))

        <ul>
            @foreach($post->tags as $tag)
            <a href="/posts/tags/{{$tag->name}}">
            {{$tag->name}}
            </a>
            @endforeach
        </ul>

     @endif

     <p>{{$post->body}}</p>
     <hr>
     <div class="comments">
        <ul class="list-group">
        
        @foreach ($post->comments as $comment)

            <strong>
                {{$comment->created_at->diffForHumans()}}
            </strong>

            <li class="list-group-item">
                {{$comment->body}}
            </li>
        @endforeach

        </ul>
    </div>

    
    <div class="card">
    
        <div class="card-block">
        
            <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
        
                <div class="form-group">
                    <textarea name="body" id="" placeholder="Your comment here" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>

    </div>

    @include ('layouts.errors')


</div>

@endsection
