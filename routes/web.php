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



Route::get('/tasks', function (){

//    $tasks = [
//        'Провести друга на 148',
//        'Поблагодарить друга',
//        'Закрепить выученное',
//        'Написать конспкт'
//    ];

    $tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function($id){

    $task = DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));

});


Route::get('/about', function() {
    return view('about');
});

Route::get('/alisa', function (){
    return view('alisa');
});