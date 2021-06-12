<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id_pembelian');
            $table->string('namaBarang',50);
            $table->date('tglBeli');
            $table->string('harga',50);
            $table->integer('jumlah');
            $table->string('sisaBayar',50);
            $table->string('totalBayar',50);
            $table->string('status',50);
            $table->string('PICAdmin',50);
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
        Schema::dropIfExists('pembelian');
    }
}
