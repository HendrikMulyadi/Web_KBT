<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(user::class);
            $table->string('nopolisi');
            $table->string('merek');
            $table->enum('jenis',['sedan','MVP','SUV']);
            $table->string('Kapasitas');
            $table->string('harga');
            $table->text('foto');
            $table->timestamps();
            $table->softDeletes('delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
