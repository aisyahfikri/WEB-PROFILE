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
        Schema::create('blank', function (Blueprint $table) {
           $table->integer('Id_sekolah');
           $table->unique('id_Sekolah');
           $table->string('sekolah');
           $table->integer('tahun');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blank');
    }
};
