<?php

use App\Task;

//Route::get('/', function () {
  // return view('index');
//});
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
//Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}','TasksController@show');

Route::get('/about', function() {
    return view('about');
});
Route::get('/alisa', function (){
    return view('alisa');
});