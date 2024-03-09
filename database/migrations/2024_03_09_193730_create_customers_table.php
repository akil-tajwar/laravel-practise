<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20); //we can limit text length
            $table->string('email', 20);
            $table->enum('gender', ['M','F','O']); //we can only put M, F or O in this field
            $table->text('address');
            $table->date('birthDate')->nullable(); //if user don't want to share this info
            $table->string('password');
            $table->boolean('status')->default(1); //default value will be 1
            $table->integer('points');
            $table->timestamps();
            //php artisan make:migration add_columns_to_customers_table (to add new columns)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
