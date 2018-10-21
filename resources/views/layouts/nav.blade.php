<div class="container">

  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">

      </div>

      @if (Auth::check())
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">{{Auth::user()->name}}</a>
        </div>
        <div class="col-4 text-right">
          <button type="button" class="btn btn-primary">Create New Post</button>
          <button type="button" class="btn btn-danger">Deactivate</button>
          <button type="button" class="btn btn-primary">Log Out</button>
        </div>
      @else
        <a class="blog-header-logo text-dark" href="/">Home</a>
      @endif




      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>

      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">Project 1</a>
      <a class="p-2 text-muted" href="#">Project 2</a>
      <a class="p-2 text-muted" href="#">Project 3</a>

      @if (!Auth::check())
      <a class="p-2 text-muted" href="/register">Register</a>
      <a class="p-2 text-muted" href="/login">Log In</a>


      @endif



    </nav>
  </div>

</div>
