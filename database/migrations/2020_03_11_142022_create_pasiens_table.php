<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pasien');
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('rt_rw');
            $table->string('kelurahan');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);;
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
        Schema::dropIfExists('pasiens');
    }
}
