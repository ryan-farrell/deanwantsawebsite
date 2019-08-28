@extends('layouts.app')

@section('content') 

<style>

#myColor{
    background-color: red;  
}

</style>
 
<nav id='myColor' class='navbar navbar-expand-md navbar-dark bg-dark shadow-sm'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' >Home</a>
                        </li>
                    <li class='nav-item'>
                        <a class='nav-link' >About Us</a>
                        </li>
                    <li class='nav-item'>
                        <a class='nav-link' >Services</a>
                        </li>
                </ul>


                    <ul class='navbar-nav my-2 my-lg-2'>
                        <li class='nav-item' >
                            <a class='nav-link'>Register</a></li>
                        <li class='nav-item' >
                            <a class='nav-link'>Login</a></li>
                </ul>   
          </nav>

@endsection