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
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->integer('detail_id');
            $table->integer('penjualan_id');
            $table->integer('produk_id');
            $table->integer('jumlah_produk');
            $table->decimal('subtotal');
            $table->primary('detail_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualans');
    }
};
