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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('sellingPrice');
            
            $table->integer('discount')->nullable();
            $table->integer('stock')->nullable();
            $table->string('supplierId')->index()->nullable();
            $table->foreign('supplierId')->references('supplierId')->on('suppliers');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
