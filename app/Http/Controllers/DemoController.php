<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //php artisan make:controller ControllerName (base controller)
    //php artisan make:controller ControllerName --invokable (single action controller)
    //php artisan make:controller ControllerName --resource (resource controller)
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
}
