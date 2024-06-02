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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments('id_inventaris');
            $table->string('nama', 100);
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->integer('id_jenis');
            $table->date('tanggal_register');
            $table->integer('id_ruang');
            $table->string('kode_inventaris');
            $table->integer('id_petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
