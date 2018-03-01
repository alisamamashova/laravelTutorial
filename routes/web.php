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



Route::get('/', function (){

//    $tasks = [
//        'Провести друга на 148',
//        'Поблагодарить друга',
//        'Закрепить выученное',
//        'Написать конспкт'
//    ];

//    $toDisplay = true;

    $owners = DB::table('owners')->get();

    return view('welcome', compact('owners'
//        'tasks'
//        , 'toDisplay'
        ));
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/alisa', function (){
    return view('alisa');
});