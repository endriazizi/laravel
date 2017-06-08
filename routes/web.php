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

/*Route::get('/test', function (){
    //a different way1
    $name='Endri';
    $age=23;
    $tasks=[
        'test',
        'test2',
        'test3'
    ];

    return view('test', compact('name','age','tasks'));
});*/
Route::get('/test', function (){
   //DB:: is a class after i specify a table's name and than we wanna get all records with ->get() method 
    //this is LARAVEL QUERY BUILDER, give us a really nice eloquent sintax to specify a table and any numebr of condition
    //
    $tasks= DB::table('tasks')->get();
    //$tasks= DB::table('tasks')-latest()->get();

    //return $tasks; //returns json format data in the view loaclhost/test

    //i'm gonna pass that collection to our test view and once again 
    return view('test', compact('tasks'));
});

//in laravel {id} is a wildcar ex: tasks/5
Route::get('/test/tasks/{task}', function ($id){
   //die and dump 'dd', helper funciot that laravel provides
   dd($id);//http://localhost:8000/test/tasks/2
    $tasks= DB::table('tasks')->get();
  
    return view('test', compact('tasks'));
});