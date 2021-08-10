<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksiMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi_masuk', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('no_transaksi',50);
            $table->date('tgl_transaksi',50);
            $table->string('supplier',50);
            $table->string('po',50);
            $table->string('nama_barang',50);
            $table->string('instansi',50);
            $table->integer('jumlah');
            $table->string('kondisi',50);
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
        Schema::dropIfExists('detail_transaksi_masuk');
    }
}
