<?php



//Route::get('/posts/{post}', 'PostController@index');
Route::get('/', 'PostController@view')->name('layout');
Route::get('/about', 'PostController@about')->name('about');
Route::post('/articles', 'ArticleController@store')->name('articleForm');
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles/{article}', 'ArticleController@show')->name('article');
Route::get('/articles', 'ArticleController@index')->name('articleSection');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
Route::put('/articles/{article}', 'ArticleController@update');





