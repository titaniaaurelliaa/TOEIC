<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('prodi_kode')->unique();
            $table->string('prodi_nama');
            $table->unsignedBigInteger('jurusan_id')->index();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodi');
    }
};