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
            $table->integer('no_PO')->nullable();
            $table->string('namaBarang',50)->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('instansi',50)->nullable();
            $table->string('keterangan',50)->nullable();
            $table->integer('status')->nullable();
            $table->string('pic_marketing',50)->nullable();
            $table->string('pic_warehouse',50)->nullable();
            $table->string('pic_admin',50)->nullable();
            $table->string('pic_purchasing',50)->nullable();
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
