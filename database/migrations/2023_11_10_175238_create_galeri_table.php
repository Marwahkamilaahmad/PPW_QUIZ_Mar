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
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_galeri')->nullable();
            $table->string('galeri_seo')->nullable();
            $table->string('path')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('buku_id')->nullable();
            $table->foreign('buku_id')
            ->references('id')
            ->on('buku_migration')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
