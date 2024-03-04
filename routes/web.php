<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/demo', function(){
    return view('demo');
});
// Route::get('/demo2/{name}/{id?}', function($name, $id=null){
//     echo $name;
//     echo $id;
// });
Route::get('/demo2/{name}/{id?}', function($name, $id=null){
    $data=compact('name', 'id');
    return view('demo2')->with($data);
});
