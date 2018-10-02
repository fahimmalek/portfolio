@extends ('layouts.master')

@section ('content')
<div class="container">
     <div class="row">
       <div class="col-md-8 blog-main">

         <div class="blog-post">
           <h2 class="blog-post-title">Submit new Blog Post</h2>
           <div class="blog-post">

               <form method="POST" action="/posts">
                     {{ csrf_field() }}

                 <div class="form-group">
                   <label for="Title">Title</label>
                   <input type="text" class="form-control" id="title" name="title" >
                 </div>

                 <div class="form-group">
                   <label for="Body">Body</label>
                   <textarea class="form-control" id="body" name="body"></textarea>
                 </div>

                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
               </form>

               @include('layouts.errors')

             </div>
         </div><!-- /.blog-post -->

       </div><!-- /.blog-main -->

     </div><!-- /.row -->

   </div><!-- /.container -->


@endsection
