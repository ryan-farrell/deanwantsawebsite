@extends('layouts.app')
{{-- This is my view through my 'index' function from my 'MakePagesContoller'. --}}

@section('content')

    <h1>All Sites</h1>
    <br>
        @if(count($websites) > 0)
            @foreach($websites as $website)
                <div class="card">
                    <h5 class="card-header">{{$website->siteName}}</a></h5>
                        <div class="card-body">
                            <h5 class="card-title">Hero Text</h5>
                            <p class="card-text">{{$website->hero}}</p>
                            <small> Created on {{$website->created_at}} and created by {{$website->user->name}} </small>
                            <hr>
                            {{-- This href below now goes through my 'SHOW' function in my 'MakeWebPagesController'. --}}
                            <a href="webpages/{{$website->id}}" class="btn btn-primary">View</a> 
                    </div>
            </div>
                <hr>
            @endforeach
            {{$websites->links()}}
        @else
            <p>No sites found</p>
        @endif

@endsection

