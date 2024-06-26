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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('kode_buku', 5);
            $table->string('judul_buku', 50);
            $table->string('penulis_buku', 50);
            $table->string('penerbit_buku', 50);
            $table->char('tahun_terbit', 4);
            $table->integer('stok');
            $table->foreignId('id_rak')->constrained('raks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
