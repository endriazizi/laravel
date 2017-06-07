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

Route::get('/', function () {
    //specify secon argument here, I mean data
    return view('welcome',[
        'name'=>'world'
    ]);
});

Route::get('/about', function (){
    //a different way
    return view('about')->with('name','wolrd');
});

/*
Route::get('/test', function (){
    //a different way1
    $name='Endri';
    $age=23;
    //return view('test',['name'=>$name]);
    //a different way2
    return view('test', compact('name','age'));
});*/

Route::get('/test', function (){
    //a different way1
    $name='Endri';
    $age=23;
    $tasks=[
        'test',
        'test2',
        'test3'
    ];

    return view('test', compact('name','age','tasks'));
});
