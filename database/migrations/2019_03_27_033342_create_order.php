<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id_order');
            $table->string('atasnama');
            $table->string('nohp');
            $table->text('alamat');
            $table->string('jumlah');
            $table->date('tgl_order');
            $table->string('tgl_ambil');
            $table->string('harga_satuan');
            $table->string('harga_total');
            $table->string('statustransaksi');
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
        Schema::dropIfExists('order');
    }
}
