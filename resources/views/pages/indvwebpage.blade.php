@extends('layouts.app')

@section('content')

<div class = "container">
        <div class = "row">
            <div class = 'col-md-12 col-md-12' >   
                <h1 style='width:auto'><strong>www.{{$page->siteName}}.com</strong></h1>
                <iframe width='1080px' height='600px' srcdoc="
                <head>
                <link href='https://fonts.googleapis.com/css?family={{$page->fontType}}' rel='stylesheet'>
                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                
                </head>

                <style>
                    body{

                    font-family: '{{$page->fontType}}', sans-serif;
                    color:{{$page->colour1}};
                    background-image: url('/storage/background_images/{{$page->background_image}}');
                    background-color: {{$page->colour3}};
                   
                    }
                    
                    .hero h2{
                    height: 350px;
                    display: flex;
                    justify-content: center;
                    margin: auto;
                    width: 100%;
                    border: 5px solid {{$page->colour1}};
                    padding: 65px 50px 10px 50px;
                    background-color: {{$page->colour2}};
                    font-size: 2vw;
                    }

                    p{
                    text-align: justify;
                    text-justify: inter-word;
                    background-color: {{$page->colour3}};
                    }

                    .navbar{
                    
                    background-color: {{$page->colour2}};

                    }

                </style>
  
            <body>

                <nav class='navbar navbar-expand-md navbar-dark bg-primary shadow-sm'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' >{{$page->siteName}}</a>
                        </li>
                    <li class='nav-item'>
                        <a class='nav-link' >Contact Us</a>
                        </li>
                    <li class='nav-item'>
                        <a class='nav-link' >About</a>
                        </li>
                </ul>


                    <ul class='navbar-nav my-2 my-lg-2'>
                    <li class='nav-item'>
                        <a class='nav-link' >Shop</a>
                        </li>
                        <li class='nav-item' >
                            <a class='nav-link'>Register</a></li>
                        <li class='nav-item' >
                            <a class='nav-link'>Login</a></li>
                </ul>   
          </nav>

               <br>
                  
                <div class='hero'>
                    <h2>{{$page->hero}}</h2>
                        </div>

               <br>
                 
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum.</p>
                    
                    </body>">
                    
               </iframe>
        </div>
        <hr>            <div class = "container">
                <small>{{$page->created_at}} and created by {{$page->user->name}}</small>
                <br>
                {{-- <small>{{$page->updated_at}} and updated by {{$page->user->name}}</small>
                    </div> --}}
    </div>
</div>

    <hr>
    <div class="d-flex">
                <a href="/webpages" class="btn btn-secondary ml-0 p-2">Go Back</a>       
        {{-- @if(!Auth::guest())     
            @if(Auth::user()->id == $page->user_id)     
                <a href="/webpages/{{$page->id}}/preview" class="btn btn-success ml-auto p-2">Preview</a>  
            @endif       
        @endif        --}}
        @if(!Auth::guest())     
            @if(Auth::user()->id == $page->user_id)     
                <a href="/webpages/{{$page->id}}/edit" class="btn btn-outline-danger ml-auto p-2">Edit</a>
            @endif       
        @endif       
 </div>

@endsection

