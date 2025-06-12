<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
   Schema::create('forms', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('phone');
    $table->string('alamat');
    $table->unsignedBigInteger('mobil_id');
    $table->date('waktu');
    $table->integer('harga');
    $table->integer('lama_sewa');
    $table->integer('total');
    $table->text('pesan')->nullable();
    $table->timestamps();

    $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
