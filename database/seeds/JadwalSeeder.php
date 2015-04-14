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

        $jadwals = array(
            ['id' => 1, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '04:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 2, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 3, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '06:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 4, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 5, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '08:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 6, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 7, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '10:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 8, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 9, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 10, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 11, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '14:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 12, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 13, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '16:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 14, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 15, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '18:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 16, 'asal_pool_id' => 1, 'tujuan_pool_id' => 9, 'tanggal' => '2015-04-20', 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 17, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '05:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 18, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 19, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '07:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 20, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 21, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '09:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 22, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 23, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '11:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 24, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 25, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '13:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 26, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 27, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '15:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 28, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 29, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '17:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 30, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 31, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 32, 'asal_pool_id' => 1, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '20:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 33, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 34, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 35, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 36, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 37, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 38, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 39, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 40, 'asal_pool_id' => 1, 'tujuan_pool_id' => 16, 'tanggal' => '2015-04-20', 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 41, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '05:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 42, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '07:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 43, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '09:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 44, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '11:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 45, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '13:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 46, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '15:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 47, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '17:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 48, 'asal_pool_id' => 2, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '19:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 49, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '04:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 50, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 51, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 52, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 53, 'asal_pool_id' => 3, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '19:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 54, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '05:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 55, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '07:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 56, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '09:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 57, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '11:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 58, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '13:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 59, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '15:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 60, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '17:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 61, 'asal_pool_id' => 4, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 62, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '04:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 63, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '08:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 64, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '12:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 65, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '16:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 66, 'asal_pool_id' => 4, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 67, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '04:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 68, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 69, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 70, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 71, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 72, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 73, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 74, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 75, 'asal_pool_id' => 5, 'tujuan_pool_id' => 13, 'tanggal' => '2015-04-20', 'waktu' => '19:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 76, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 77, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '10:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 78, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 79, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 80, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 81, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '18:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 82, 'asal_pool_id' => 5, 'tujuan_pool_id' => 12, 'tanggal' => '2015-04-20', 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 83, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '05:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 84, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '06:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 85, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '09:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 86, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '11:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 87, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '14:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 88, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '16:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 89, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '19:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 90, 'asal_pool_id' => 6, 'tujuan_pool_id' => 10, 'tanggal' => '2015-04-20', 'waktu' => '21:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 91, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '06:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 92, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '08:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 93, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '10:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 94, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '12:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 95, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '14:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 96, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '16:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 97, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '18:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 98, 'asal_pool_id' => 6, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '20:30', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 99, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '08:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 100, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '12:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 101, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '16:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 102, 'asal_pool_id' => 6, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '20:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 103, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 104, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 105, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 106, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 107, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 108, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 109, 'asal_pool_id' => 7, 'tujuan_pool_id' => 15, 'tanggal' => '2015-04-20', 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 110, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '04:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 111, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '06:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 112, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '08:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 113, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '10:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 114, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '12:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 115, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '14:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 116, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '16:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 117, 'asal_pool_id' => 7, 'tujuan_pool_id' => 14, 'tanggal' => '2015-04-20', 'waktu' => '18:45', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 118, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '05:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 119, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '07:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 120, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '09:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 121, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '11:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 122, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '13:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 123, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '15:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 124, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '17:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 125, 'asal_pool_id' => 7, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '19:00', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],

            ['id' => 126, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '06:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 127, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '10:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 128, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '14:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
            ['id' => 129, 'asal_pool_id' => 8, 'tujuan_pool_id' => 11, 'tanggal' => '2015-04-20', 'waktu' => '18:15', 'harga' => 120000, 'aktif' => 1, 'promo' => 0],
        );

        DB::table('jadwal')->insert($jadwals);
    }

}
