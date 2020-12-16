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

Route::get('/login', function () {
    return view('login');
});

Route::get('/blog',function(){
	return view ('blog');
});

Route::get('product',function(){
	return view ('CRUD/product');
});

Route::get('/home',function(){
	return view('static/home');
});

Route::get('manu', 'App\Http\Controllers\ManuController@create_data');



Route::get('/index',function(){
	return view('Dashboard/index');
});

Route::get('/component-blog-posts',function(){
	return view('Dashboard/component-blog-posts');
});

Route::get('/errors',function(){
	return view('Dashboard/errors');
});

Route::get('/form-components',function(){
	return view('Dashboard/form-components');
});

Route::get('/add-new-post',function(){
	return view('Dashboard/add-new-post');
});

Route::get('/tables',function(){
	return view('Dashboard/tables');
});

Route::get('/user-profile-lite',function(){
	return view('Dashboard/user-profile-lite');
});


Route::get('users', 'UserController@index');
Route::get('posts/create', 'PostConroller@create');



Route::get('newblog',function(){
	return view ('newblog');
});

Route::resource('products','ProductController');
