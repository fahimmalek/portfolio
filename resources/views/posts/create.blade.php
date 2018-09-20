@extends ('layouts.master')

@section ('content')

  <div class="blog-post">

    <h1> Create a Post </h1>

    <form method="POST" action="/posts">

      {{ csrf_field() }}

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>


  <div class="form-group">
    <label for="Body">Body</label>
    <textarea class="form-control" id="body" placeholder="Body" name="body"></textarea>
  </div>





  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

@endsection
