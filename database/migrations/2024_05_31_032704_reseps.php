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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasiens')->onDelete('cascade');
            $table->foreignId('id_pengobatan')->constrained('pengobatans')->onDelete('cascade');
            $table->dateTime('tanggal');
            $table->string('dosis')->nullable();
            $table->text('intruksi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
