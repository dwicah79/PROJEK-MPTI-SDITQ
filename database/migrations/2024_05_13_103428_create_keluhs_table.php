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
        Schema::create('keluhs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamt')->nullable(); // Tambahkan nullable() agar kolom bisa kosong
            $table->string('email');
            $table->string('no');
            $table->text('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhs');
    }
};
