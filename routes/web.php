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

Route::get('/', 'AdminController@index');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/blog',function(){
	return view ('blog');
});

Route::get('product',function(){
	return view ('CRUD/product');
});

Route::get('home','HomeController@index');

Route::get('manu', 'App\Http\Controllers\ManuController@create_data');


Route::get('Dashboard',function(){
	return view('Dashboard/Dashboard');
});

Route::get('posts',function(){
	return view('Dashboard/posts');
});

Route::get('newpost',function(){
	return view('Dashboard/newpost');
});

Route::get('form',function(){
	return view('Dashboard/form');
});


Route::get('tables',function(){
	return view('Dashboard/tables');
});

Route::get('profile',function(){
	return view('Dashboard/profile');
});

Route::get('errors',function(){
	return view('Dashboard/errors');
});

Route::get('new',function(){
	return view('Dashboard/new');
});

// Route::get('users', 'UserController@index');
// Route::get('posts/create', 'PostConroller@create');



Route::get('newblog',function(){
	return view ('newblog');
});

Route::resource('products','ProductController');

Auth::routes();

Route::get('show',function(){
	return view ('Dashboard/show');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('products','ProductController@index');
Route::get('products/create','ProductController@create')->name('products.create');

// Route::get('greeting', function () {
//     return view('greeting', ['name' => 'James']);
// });

Route::get('/about','NewController@index');