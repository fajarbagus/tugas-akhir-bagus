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
        Schema::create('hps', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('harga_hp');
            $table->string('RAM');
            $table->string('Internal');
            $table->string('Kamera');
            $table->string('Fingerprint');
            $table->string('Sistem_Operasi');
            $table->string('Type');
            $table->string('File');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hps');
    }
};
