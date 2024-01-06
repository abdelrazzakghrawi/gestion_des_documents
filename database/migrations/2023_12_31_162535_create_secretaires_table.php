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
        Schema::create('secretaires', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('cin', 100);
            $table->date('datedenaissance');
            $table->string('mobile_number', 100);
            $table->string('address_line1', 100); 
            $table->string('email', 100)->unique();
            $table->string('Country', 100);
            $table->string('Region', 100);
      
            $table->timestamps();
        });
    }


};