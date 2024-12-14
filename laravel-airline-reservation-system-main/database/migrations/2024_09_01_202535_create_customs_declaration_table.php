<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customs_declaration', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');          
            $table->string('passport_number'); 
            $table->text('declaration_details');  
            $table->timestamps();
        });
    }
};
