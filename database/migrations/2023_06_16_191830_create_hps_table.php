<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hps');
    }
}
