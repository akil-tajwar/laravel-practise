<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SingleActionController;

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

//recommended
Route::get('/', [DemoController::class, 'home']);
Route::get('/about', [DemoController::class,'about']);
Route::get('/courses', SingleActionController::class);
Route::resource('photo', PhotoController::class);

//not recommended
Route::get('/loop', function(){
    return view('loop');
});
// Route::get('/demo2/{name}/{id?}', function($name, $id=null){
//     echo $name;
//     echo $id;
// });
Route::get('/conditional/{name?}/{id?}', function($name, $id=null){
    $data=compact('name', 'id');
    return view('conditional')->with($data);
});
