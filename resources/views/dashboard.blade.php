@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{Auth::user()->name }}
            <hr>
              <p>Please now look through your already created pages or make some more lovely websites. </p>
                  <h3> Your Websites</h3>
                  @if(count($websites) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Site Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                @foreach($websites as $website)
                <tr>
                    <td>Title</td>
                        <td>{{$website->siteName}}</td>
                        <td><a href="/webpages/{{$website->id}}/edit" class="btn btn-outline-danger">Edit</td>
                        <td><form action="/webpages/{{$website->id}}" method="POST">

            {{csrf_field()}}
            {{-- Found the 'csrf_field()' method above works in this version of laravel and creates me
            an appropriate token to avoid laravels 419 error where tokens don't match. --}}

            {{-- <input type="hidden" name="_method" value="DELETE"> --}}
            {{method_field('DELETE')}}

            
        <button type="submit" class="btn btn-danger">Delete</button>
    
                    </form> 
                        </td>
                        </tr>
                    @endforeach
                </table>
                    @else
                    <p>You have yet to create any pages. Lets get started and click on 'Make A Website'</p>
                  @endif


                  <div class="row justify-content-around">
                  <a class="btn btn-dark" href="/webpages" role="button">All Sites</a>
                   
                  <a class="btn btn-dark " href="/webpages/create" role="button">Make A Website</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
