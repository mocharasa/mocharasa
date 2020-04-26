<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['public'], function(){
  Route::get('/', 'PublicController@index')->name('public.home');
  Route::get('/blog', 'PublicController@blog')->name('public.blog');
  Route::get('/blog/{slug}', 'PublicController@viewblog')->name('public.viewblog');
  Route::get('/kategori/{category}', 'PublicController@category')->name('public.category');
  Route::get('/cari', 'PublicController@cari')->name('public.cari');
  Route::get('/tentang', 'PublicController@tentang')->name('public.tentang');
  Route::get('/galeri', 'PublicController@galeri')->name('public.galeri');
  Route::get('/kontak', 'PublicController@kontak')->name('public.kontak');
});

Route::get('/viewblog', function(){
  return view('public.viewblog');
});

Route::group(['middleware' => 'auth'], function(){
  Route::get('/dashboard', 'HomeController@index')->name('dashboard');
  Route::get('/post/trash','PostController@trash')->name('post.trash');
  Route::get('/post/{id}/restore','PostController@restore')->name('post.restore');
  Route::get('/post/{id}/kill','PostController@kill')->name('post.kill');
  Route::resource('/post','PostController');
  Route::resource('/category','CategoryController');
  Route::resource('/tag','TagController');
  Route::resource('/user','UserController');
});

//Route::get('/home', 'HomeController@index')->name('home');
