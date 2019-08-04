@extends('layouts.app')

{{-- This main 'layout' is where we set our individual pages content inbetween the '@section' tags below. We've 
used the '@extends' above to link this file to our 'app.blade.php' in our 'layouts' folder hence 'layouts/app.blade.php' 
looks like '@extends('layouts.app')'.

The HTML between these section tags is what is rendered using the '@yield' back on the 'app.blade.php' in our
layouts folder in our view folder.--}}

@section('content')

 {{-- 'Title' being pulled from our 'PagesController.php' file from our 'index' method. --}}
        
        <div class="jumbotron text-center">
                <div class="container">
                 <h1 class="display-3">{{$title}}</h1>
                        <h3>You give us some ideas on what your website should look like and our state of the art Dean Engine &reg; will do the rest.</h3>
                <br>
        <div class="container">
                <div class="row justify-content-around">
                        <p class="col-md-6"><a class="btn btn-success btn-lg" href="/login" role="button">Login &raquo;</a></p>
                        <p class="col-md-6"><a class="btn btn-primary btn-lg" href="/register" role="button">Register &raquo;</a></p>
                        </div>
                        </div>
                </div>
        </div>
<br>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        <h2>About</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="/about" role="button">About Us &raquo;</a></p>
      </div>
      <div class="col-md-6">
        <h2>Services</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="/services" role="button">View our Services &raquo;</a></p>
      </div>
    </div>
  </div> <!-- /container --><h1></h1>

       
@endsection
