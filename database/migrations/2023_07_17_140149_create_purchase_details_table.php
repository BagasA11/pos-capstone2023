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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->bigInteger('purchasePrice');
            //foreign
            //FK item
            $table->foreignId('item_id')->constrained('items');
            //fk purchase transaction
            $table->string('purchase_id')->index();
            $table->foreign('purchase_id')->references('purchase_id')->on('purchase_transactions');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
