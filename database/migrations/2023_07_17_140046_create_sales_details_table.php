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
        Schema::create('sales_details', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->bigInteger('sellingPrice');
            $table->bigInteger('purchasePrice');

            //foreign key
            //tabel transaksi penjualan
            $table->foreignId('sales_id')->constrained('sales_transactions');
            //tabel item
            $table->foreignId('item_id')->constrained('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_details');
    }
};
