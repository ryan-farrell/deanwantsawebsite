@extends('layouts.app')

@section('content')

    <h1>Make Your Website</h1>
    <hr>
        <form action="/webpages" method="POST" enctype = "multipart/form-data">
            {{csrf_field()}}

            {{-- Found the 'csrf_field()' method above works in this version of laravel and creates me
            an appropriate token to avoid laravels 419 error where tokens don't match. --}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Website Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><strong>www.</strong></span>
                        </div>
                            <input type="text" name="siteName" class="form-control" id="exampleFormControlInput1" placeholder="example">
                                <div class="input-group-append">
                        <span class="input-group-text"><strong>.com</strong></span>
                    </div>
                </div>
            </div>
                <hr>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example text for your hero section:</label>
            <textarea class="form-control" name="hero" id="exampleFormControlTextarea1" rows="3" placeholder="Please type here..."></textarea>
            </div>
                <hr>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select primary font:</label>
                    <select name="fontType" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Choose...</option>
                        <option>Work Sans</option>
                        <option>IBM Plex Sans</option>
                        <option>Rubik</option>
                        <option>Space Mono</option>
                        <option>Fira Sans</option>
                    </select>
                </div>
                <hr>
                <div class="form-group"> 
                    <div>
                        Please select your background image and upload:  
                        <input type="file" class="btn btn-light" name = "background_image" id = "imageUpload" >
                    </div>
                </div>
                <hr>

                
                    <label for="exampleFormControlSelect3">Your Branding <small>(select your brand colours):</small></label>
                    <br>
                <div class="form-row d-flex justify-content-around">
               
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Select your primary colour:</label>
                    <select name="colour1" class="form-control" id="exampleFormControlSelect3">
                        <option value="">Choose...</option>
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
                        <option value="">Choose...</option>
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
                        <option value="">Choose...</option>
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
        <button type="submit" class="btn btn-success p-2" value="submit">Generate Website</button>

        <button type="reset" class="btn btn-link ml-auto p-2" href="/makepage">Reset this page</button>
        </div>
</form>

@endsection