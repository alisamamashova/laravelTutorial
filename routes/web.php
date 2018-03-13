<?php

//use App\Task;

//Route::get('/', function () {
  // return view('index');
//});
Route::get('/', 'PostsController@index');
Route::get('/tasks', 'TasksController@index');
//{
//    $tasks = DB::table('tasks')->get();
   // $tasks = Task::all();

   // return view('tasks.index', compact('tasks'));
//});

Route::get('/tasks/{task}','TasksController@show');
//{

//    $task = DB::table('tasks')->find($id);
//    $task = Task::find($id);
//    return view('tasks.show', compact('task'));
//});


Route::get('/about', function() {
    return view('about');
});

Route::get('/alisa', function (){
    return view('alisa');
});