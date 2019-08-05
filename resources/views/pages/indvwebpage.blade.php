@extends('layouts.app')

@section('content')

<div class = "container">
        <div class = "row">
            <div class = "col-md-5 col-md-5">
                <h4>Name of page:</h4>
                <h1 style="width:auto"><strong>www.{{$page->siteName}}.com</strong></h1>
                <hr>
                <h4>Text to appear in your hero section:</h4>
                <h5>"{{$page->hero}}"</h5>
                <h5>Font Type:</h5>
                <h6>{{$page->fontType}}</h6>
                <h5>Background:</h5>
                <h6>{{$page->background_image}}</h6>
                <h5>Primary Colour:</h5>
                <h6>{{$page->colour1}}</h6>
                <h5>Secondary Colour:</h5>
                <h6>{{$page->colour2}}</h6>
                <h5>Tertiary Colour:</h5>
                <h6>{{$page->colour3}}</h6>
        </div>
                    <div class = "col-md-7 col-md-7">
                        <img style="width:70%" src="/storage/background_images/{{$page->background_image}}">
                    </div>
        <hr>
            <div class = "container">
                <small>{{$page->created_at}} and created by {{$page->user->name}}</small>
                <br>
                <small>{{$page->updated_at}} and updated by {{$page->user->name}}</small>
                    </div>
    </div>
</div>

    <hr>
    <div class="d-flex">
    <a href="/webpages" class="btn btn-secondary ml-0 p-2">Go Back</a>       
    <a href="#" class="btn btn-success ml-auto p-2">Preview</a>  
        @if(!Auth::guest())     
            @if(Auth::user()->id == $page->user_id)     
            <a href="/webpages/{{$page->id}}/edit" class="btn btn-outline-danger ml-auto p-2">Edit</a>
            @endif       
        @endif       
 </div>

@endsection

