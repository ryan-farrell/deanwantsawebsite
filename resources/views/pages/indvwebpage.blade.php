@extends('layouts.app')

@section('content')

    <h1>{{$page->siteName}}</h1>
    <hr>
    <h2>{{$page->hero}}</h2>
    <h4>{{$page->fontType}}</h4>
    <h4>{{$page->background}}</h4>
    <h4>{{$page->colour1}}</h4>
    <h4>{{$page->colour2}}</h4>
    <h4>{{$page->colour3}}</h4>
    <hr>
    <small>{{$page->created_at}} and created by {{$page->user->name}}</small>
    <br>
    <small>{{$page->updated_at}} and created by {{$page->user->name}}</small>

    <hr>
    <div class="d-flex">
    <a href="/webpages" class="btn btn-secondary ml-0 p-2">Go Back</a>       
    <a href="#" class="btn btn-success ml-auto p-2">Preview</a>       
    <a href="/webpages/{{$page->id}}/edit" class="btn btn-outline-danger ml-auto p-2">Edit</a>       
 </div>

@endsection

