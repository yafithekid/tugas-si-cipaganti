<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('jadwal')->delete();

        $id = 1;
        $start_date = '2015-04-20';
        $day = 7;


        for($i = 0; $i <= $day; $i++) {
            $tanggal = date('Y-m-d',strtotime($start_date . '+'.$i.' day'));
            $jadwals = array(
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '04:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '06:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '08:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '10:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '14:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '16:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '18:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => $tanggal, 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '05:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '07:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '09:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '11:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '13:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '15:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '17:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '20:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => $tanggal, 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '05:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '07:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '09:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '11:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '13:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '15:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '17:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '19:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '04:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '19:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '05:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '07:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '09:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '11:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '13:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '15:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '17:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '04:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '08:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '12:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '16:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '04:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => $tanggal, 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '10:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '18:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => $tanggal, 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '05:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '06:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '09:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '11:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '14:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '16:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '19:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => $tanggal, 'waktu' => '21:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '20:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '08:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '16:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => $tanggal, 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '04:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '06:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '08:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '10:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '12:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '14:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '16:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => $tanggal, 'waktu' => '18:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

                ['id' => $id++, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '06:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '10:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '14:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
                ['id' => $id++, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => $tanggal, 'waktu' => '18:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            );

            DB::table('jadwal')->insert($jadwals);
        }
    }

}