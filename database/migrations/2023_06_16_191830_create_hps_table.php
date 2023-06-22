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
            $table->enum('merk', ['Samsung', 'Oppo','Vivo','Sony','Asus','Huawei']);
            $table->string('harga_hp');
            $table->enum('RAM', ['2','3','4','6','8']);
            $table->enum('Internal',['16','32','64','128','256']);
            $table->string('Kamera');
            $table->enum('Fingerprint',['Ya','Tidak']);
            $table->string('Sistem_Operasi');
            $table->string('Type');
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
