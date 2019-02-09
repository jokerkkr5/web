<?php

Route::group(['namespace' => 'User'], function(){
	Route::get('/', function(){
		return dd(App\Model\user\Post::find(4)->tags);
	});
//	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/contact', 'HomeController@contact')->name('contact');
	Route::get('/post', 'PostsController@index')->name('post');
});


Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('/posts', 'PostsController');
	Route::resource('/tags', 'TagsController');
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/users', 'UsersController');
});


