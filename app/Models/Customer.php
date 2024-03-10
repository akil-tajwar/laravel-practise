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
}
