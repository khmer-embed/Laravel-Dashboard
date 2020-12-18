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

Route::get('newblog',function(){
	return view ('newblog');
});

Auth::routes();

Route::get('show',function(){
	return view ('Dashboard/show');
});


Route::get('/', function () {
    return view('welcome');
});


//backend

Route::get('/admin/Dashboard','Backend\DashboardController@index')->name('dashboard.index');

Route::get('/admin/products','Backend\ProductController@index')->name('product.index');

Route::get('/admin/products/create','Backend\ProductController@create')->name('product.create');

Route::post('/admin/products/store','Backend\ProductController@store')->name('product.store');

Route::get('/admin/products/show/{id}','Backend\ProductController@show')->name('product.show');

Route::get('/admin/products/destroy/{id}','Backend\ProductController@destroy')->name('product.destroy');

Route::get('/admin/products/edit/{id}','Backend\ProductController@edit')->name('product.edit');

Route::put('/admin/products/update/{id}','Backend\ProductController@update')->name('product.update');

Route::get('/admin/news','Backend\NewsController@index')->name('news.index');

