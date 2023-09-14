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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('nama');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->unsignedBigInteger('id_etalase')->required()->constraint();
            $table->foreign('id_etalase')->references('id_etalase')->on('etalases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['id_etalase']);
        });
        Schema::dropIfExists('products');
    }
};
