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
        Schema::create('kasirs', function (Blueprint $table) {
            $table->integer('id_kasir');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('username');
            $table->string('password');
            $table->enum('akses',['admin','petugas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs');
    }
};
