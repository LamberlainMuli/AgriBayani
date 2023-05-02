<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('picture_url');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('location');
            $table->string('password');
            $table->boolean('is_borrower');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
