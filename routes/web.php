<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\RegistratonController;
use App\Http\Controllers\Form2Controller;
use App\Models\Customer;
use App\Http\Controllers\HyperlinkController;
use Illuminate\Http\Request;

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

Route::get('/register', [RegistratonController::class,'index']);
Route::post('/register', [RegistratonController::class,'register']);

Route::get('/form2', [Form2Controller::class, 'index']);
Route::post('/form2', [Form2Controller::class, 'store']);

Route::get('/form2/view', [Form2Controller::class, 'view']);
Route::get('/form2/trash', [Form2Controller::class, 'trash']);
Route::get('/form2/view/delete/{id}', [Form2Controller::class, 'delete']);
Route::get('/form2/view/force-delete/{id}', [Form2Controller::class, 'forceDelete']);
Route::get('/form2/view/restore/{id}', [Form2Controller::class, 'restore']);
Route::get('/form2/view/edit/{id}', [Form2Controller::class, 'edit']);
Route::post('/form2/view/update/{id}', [Form2Controller::class, 'update']);

Route::get('/hyperlink', [HyperlinkController::class, 'index']);

//not recommended
Route::get('set-session', function(Request $request){
    $request->session()->put('user_name', 'Akil Tajwar');
    $request->session()->put('user_id','123');
    return redirect('');
});

Route::get('/loop', function(){
    return view('loop');
});
Route::get('/conditional/{name?}/{id?}', function($name, $id=null){
    $data=compact('name', 'id');
    return view('conditional')->with($data);
});
Route::get('/customer', function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});
// Route::get('/demo2/{name}/{id?}', function($name, $id=null){
//     echo $name;
//     echo $id;
// });
