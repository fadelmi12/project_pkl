<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_masuk', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('no_transaksi', 50);
            $table->date('tgl_transaksi');
            $table->string('nama_barang', 50);
            $table->string('po', 50);
            $table->string('kondisi', 50);
            $table->integer('jumlah');
            $table->string('nama_supplier', 50);
            $table->string('instansi', 50);
            $table->string('pengirim', 50);
            $table->string('penerima', 50);
            // $table->string('ekspedisi',50);
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
        Schema::dropIfExists('transaksi_masuk');
    }
}
