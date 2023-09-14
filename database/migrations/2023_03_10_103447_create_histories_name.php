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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->required()->constraint();
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->string("deskripsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('histories', function(Blueprint $table){
            $table->dropForeign(['admin_id']);
        });
        Schema::dropIfExists('histories');
    }
};
