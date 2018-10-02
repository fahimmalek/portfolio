@extends ('layouts.master')


@section ('content')
  <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          @foreach ($posts as $post)
            @include('posts.entry')
          @endforeach

        </div><!-- /.blog-main -->

@include ('layouts.sidebar')

     </div><!-- /.row -->

   </main><!-- /.container -->
@endsection
