<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //php artisan make:model table_name
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';

    //to capitalize database data
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value); //for "name"
    }
    // public function setUserNameAttribute($value){
    //     $this->attributes['user_name'] = ucwords($value); //for "user_name"
    // }
}
