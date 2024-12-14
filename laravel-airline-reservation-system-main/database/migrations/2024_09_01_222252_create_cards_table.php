<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('card_number');
            $table->string('card_name');
            $table->string('expiry_date');
            $table->string('cvv');
            $table->string('card_type');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_zip');
            $table->boolean('save_card')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
