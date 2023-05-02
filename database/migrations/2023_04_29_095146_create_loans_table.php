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
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('borrower_id');
        $table->unsignedBigInteger('lender_id');
        $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');
        $table->foreign('lender_id')->references('id')->on('lenders')->onDelete('cascade');
        $table->double('amount_loaned');
        $table->double('amount_paid');
        $table->boolean('is_fully_paid');
        $table->double('interest');
        $table->double('amount_to_pay_total');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
