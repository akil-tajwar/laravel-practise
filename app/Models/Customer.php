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

    //we use mutator when we modify data while we set the data. we use accessor when we modify data while we access the data
    //to capitalize database data
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value); //for "name"
    }
    // public function setUserNameAttribute($value){
    //     $this->attributes['user_name'] = ucwords($value); //for "user_name"
    // }
    

    //to optimize birthDate
    public function getBirthDateAttribute($value){
        return date('d-M-Y', strtotime($value));
    }
}
