<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('kota',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama',50);
        });

        Schema::create('pool',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama',100);
            $table->integer('kota_id')->unsigned();
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
        });

        Schema::create('jadwal',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('asal_pool_id')->unsigned();
            $table->foreign('asal_pool_id')->references('id')->on('pool')->onDelete('cascade');
            $table->integer('tujuan_pool_id')->unsigned();
            $table->foreign('tujuan_pool_id')->references('id')->on('pool')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('waktu');
            $table->integer('harga');
            $table->tinyInteger('aktif');
            $table->tinyInteger('promo');
        });

		Schema::create('pesanan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('jadwal_id')->unsigned();
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('cascade');
            $table->string('nama_pemesan',100);
            $table->string('no_telepon',50);
            $table->integer('no_kursi',false,true);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pesanan');
        Schema::drop('jadwal');
        Schema::drop('pool');
        Schema::drop('kota');
	}

}
