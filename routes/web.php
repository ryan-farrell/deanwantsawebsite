<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('pages/about');
// });

// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is user ' . $name . ' with an id ' . $id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');

// Route::get('/makepage', 'PagesController@makeAWebPage');

/* This setup our 'MakeWebPagesController' with a list of all CRUD functions to call on.
we used the CLI command 'php artisan make:controller MakeWebPagesController --resource'.

We included the '--resource' flag at the end to pull in all of the CRUD functions inside 
the resource model alreadt created within laravel.*/

Route::resource('webpages', 'MakeWebPagesController');

/*
Use 'php artisan route:list' to see all routes created:

+--------+-----------+-------------------------+------------------+-----------------------------------------------------+--------------+
| Domain | Method    | URI                     | Name             | Action                                              | Middleware   |
+--------+-----------+-------------------------+------------------+-----------------------------------------------------+--------------+
|        | GET|HEAD  | /                       |                  | App\Http\Controllers\PagesController@index          | web          |
|        | GET|HEAD  | about                   |                  | App\Http\Controllers\PagesController@about          | web          |
|        | GET|HEAD  | api/user                |                  | Closure                                             | api,auth:api |
|        | GET|HEAD  | login                   |                  | App\Http\Controllers\PagesController@login          | web          |
|        | GET|HEAD  | makepage                |                  | App\Http\Controllers\PagesController@makeAWebPage   | web          |
|        | GET|HEAD  | services                |                  | App\Http\Controllers\PagesController@services       | web          |
|        | GET|HEAD  | signup                  |                  | App\Http\Controllers\PagesController@signup         | web          |
|        | GET|HEAD  | webpages                | webpages.index   | App\Http\Controllers\MakeWebPagesController@index   | web          |
|        | POST      | webpages                | webpages.store   | App\Http\Controllers\MakeWebPagesController@store   | web          |
|        | GET|HEAD  | webpages/create         | webpages.create  | App\Http\Controllers\MakeWebPagesController@create  | web          |
|        | GET|HEAD  | webpages/{webpage}      | webpages.show    | App\Http\Controllers\MakeWebPagesController@show    | web          |
|        | PUT|PATCH | webpages/{webpage}      | webpages.update  | App\Http\Controllers\MakeWebPagesController@update  | web          |
|        | DELETE    | webpages/{webpage}      | webpages.destroy | App\Http\Controllers\MakeWebPagesController@destroy | web          |
|        | GET|HEAD  | webpages/{webpage}/edit | webpages.edit    | App\Http\Controllers\MakeWebPagesController@edit    | web          |
+--------+-----------+-------------------------+------------------+-----------------------------------------------------+--------------+

By creating the list above of possible routes I can now use the above routes through my 'MakeWebPagesController' */

// Route::get('/mysites', 'MakeWebPagesController@index'); // got to mysites page via the 'MakeWebPagesController' function'index()'
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
