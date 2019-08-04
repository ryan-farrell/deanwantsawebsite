 {{-- This main 'layout' is where we set our individual pages content inbetween the '@section' tags below. We've 
used the '@extends' above to link this file to our 'app.blade.php' in our 'layouts' folder hence 'layouts/app.blade.php' 
looks like '@extends('layouts.app')'.

The HTML between these section tags is what is rendered using the '@yield' back on the 'app.blade.php' in our
layouts folder in our view folder.--}}

@extends('layouts.app')

@section('content')
 {{-- 'Title' being pulled from our 'PagesController.php' file from our 'about' method. --}}
        
        <h1>{{$title}}</h1>

        <p>This website was built to help lazy developers who hate front end keep their jobs.</p>

@endsection

