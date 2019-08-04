@extends('layouts.app')

@section('content')

    <h1>Edit Your Website</h1>
    <hr>
        <form action="/webpages/{{$page->id}}" method="POST">

            {{csrf_field()}}
            {{-- Found the 'csrf_field()' method above works in this version of laravel and creates me
            an appropriate token to avoid laravels 419 error where tokens don't match. --}}


            {{-- <input type="hidden" name="_method" value="PUT"> --}}

            {{-- <input type="hidden" name="_method" value="PUT"> --}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="exampleFormControlInput1">Website Name</label>
                <input value="{{$page->siteName}}"type="text" name="siteName" class="form-control" id="exampleFormControlInput1" placeholder="example.com">
            </div>
                <hr>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example text for your hero section:</label>
            <textarea class="form-control" name="hero" id="exampleFormControlTextarea1" rows="3">{{$page->hero}}</textarea>
            </div>
                <hr>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select primary font:</label>
                    <select name="fontType" class="form-control" id="exampleFormControlSelect1">
                        <option>{{$page->fontType}}</option>
                        <option>Work Sans</option>
                        <option>IBM Plex Sans</option>
                        <option>Rubik</option>
                        <option>Space Mono</option>
                        <option>Fira Sans</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Select your background:</label>
                    <select name="background" class="form-control" id="exampleFormControlSelect2">
                        <option>{{$page->background}}</option>
                        <option>Trees</option>
                        <option>Sea</option>
                        <option>Desert</option>
                        <option>Fun</option>
                        <option>Music Concert</option>
                        <option>None</option>
                    </select>
                    <hr>
                  <label for="exampleFormControlSelect3">Your Branding <small>(select your brand colours):</small></label>
                    <br>
                <div class="form-row d-flex justify-content-around">
               
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Select your primary colour:</label>
                    <select name="colour1" class="form-control" id="exampleFormControlSelect3">
                        <option>{{$page->colour1}}</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Yellow</option>
                        <option>Purple</option>
                        <option>Green</option>
                        <option>Orange</option>
                        <option>Grey</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect4">Select your secondary colour:</label>
                    <select name="colour2" class="form-control" id="exampleFormControlSelect4">
                        <option>{{$page->colour2}}</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Yellow</option>
                        <option>Purple</option>
                        <option>Green</option>
                        <option>Orange</option>
                        <option>Grey</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect5">Select your tertiary colour:</label>
                    <select name="colour3" class="form-control" id="exampleFormControlSelect5">
                        <option>{{$page->colour3}}</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Yellow</option>
                        <option>Purple</option>
                        <option>Green</option>
                        <option>Orange</option>
                        <option>Grey</option>
                    </select>
                </div>
            </div>
        <hr>
        <div class="d-flex">
        <button type="submit" class="btn btn-success p-2" value="submit">Update Website</button>

        <button type="reset" class="btn btn-link ml-auto p-2" href="/makepage">Reset this page</button>
        </div>
</form>
<hr>

<form action="/webpages/{{$page->id}}" method="POST">

            {{csrf_field()}}
            {{-- Found the 'csrf_field()' method above works in this version of laravel and creates me
            an appropriate token to avoid laravels 419 error where tokens don't match. --}}

            {{-- <input type="hidden" name="_method" value="DELETE"> --}}
            {{method_field('DELETE')}}

            
        <button type="submit" class="btn btn-danger float-right">Delete this page</button>
    
</form>

@endsection