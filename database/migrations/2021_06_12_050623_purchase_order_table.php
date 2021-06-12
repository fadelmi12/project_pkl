<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->increments('id_PO');
            $table->string('no_PO',50);
            $table->date('tgl_buat');
            $table->string('instansi',50);
            $table->integer('status');
            $table->date('tgl_instalasi');
            $table->string('pic_teknisi',50);
            $table->string('pic_marketing',50);
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
        Schema::dropIfExists('purchase_order');
    }
}
