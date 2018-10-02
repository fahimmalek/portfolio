@extends ('layouts.master')

@section ('content')
<div class="container">
     <div class="row">
       <div class="col-md-8 blog-main">

    <div class="blog-post">
           <h2 class="blog-post-title">Register</h2>
                <div class="blog-post">

                <form method="POST" action="/login">
                        {{ csrf_field() }}


                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>

                
                       
              
                </form>

               @include('layouts.errors')

                </div>
            </div><!-- /.blog-post -->
         
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</div><!-- /.container -->


@endsection