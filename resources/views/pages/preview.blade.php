@extends('layouts.app')

@section('content')

{{--******************** Preview Page ***************************************** --}}
<div class="jumbotron text-center">
                <div class="container">
                 <h1 class="display-3">Preview</h1>
        </div>
    </div>
                <pre>{{print_r($webpage)}}</pre>
                {{-- <h2>{{dd($webpage)}}</h2> --}}
{{-- </div>
<div class = "container">
        <div class = "row">
            <div class = "col-md-5 col-md-5">
                <h4>Name of page:</h4>
                <h1 style="width:auto"><strong>www.{{$page->siteName}}.com</strong></h1>
                
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
    <a href="/webpages/{{$page->id}}/edit" class="btn btn-secondary ml-0 p-2">Go Back</a>       
    
        @if(!Auth::guest())     
            @if(Auth::user()->id == $page->user_id)     
            <a href="/webpages/{{$page->id}}/edit" class="btn btn-outline-danger ml-auto p-2">Edit</a>
            @endif       
        @endif       
 </div> --}}

@endsection

