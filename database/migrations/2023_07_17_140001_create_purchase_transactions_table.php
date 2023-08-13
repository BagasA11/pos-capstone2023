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
        Schema::create('purchase_transactions', function (Blueprint $table) {
            $table->string('purchase_id')->primary();

            //foreign key
            $table->string('supplierId')->index();
            $table->foreign('supplierId')->references('supplierId')->on('suppliers');

            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
            //$table->date('purchaseDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_transactions');
    }
};
