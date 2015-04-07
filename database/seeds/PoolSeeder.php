<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PoolSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pool')->delete();

        $kotas = array(
            ['id' => 1, 'nama' => 'Miko Mall Kopo (Miko)','kota_id' => 1],
            ['id' => 2, 'nama' => 'Pasteur Point','kota_id' => 1],
            ['id' => 3, 'nama' => 'Festival City Link (Citylink)','kota_id' => 1],
            ['id' => 4, 'nama' => 'Bandung Trade Center (BTC)','kota_id' => 1],
            ['id' => 5, 'nama' => 'Dipati Ukur (DU)','kota_id' => 1],
            ['id' => 6, 'nama' => 'Gatot Subroto 94 (Gatsu-94)','kota_id' => 1],
            ['id' => 7, 'nama' => 'Cipaganti 75 (CPGT-75)','kota_id' => 1],
            ['id' => 8, 'nama' => 'Cipaganti 84 (CPGT-84)','kota_id' => 1],

            ['id' => 9, 'nama' => 'Kelapa Gading (KG)','kota_id' => 2],
            ['id' => 10, 'nama' => 'Mangga Dua Square (MG2)','kota_id' => 2],
            ['id' => 11, 'nama' => 'Pancoran (PNCRN)','kota_id' => 2],
            ['id' => 12, 'nama' => 'Dewi Sartika(DS)','kota_id' => 2],
            ['id' => 13, 'nama' => 'Rawamangun (RWMGN)','kota_id' => 2],
            ['id' => 14, 'nama' => 'Jatiwaringin (JTWRGN)','kota_id' => 2],
            ['id' => 15, 'nama' => 'Kebon Jeruk (KBNJRK)','kota_id' => 2],
            ['id' => 16, 'nama' => 'Kemanggisan (KMGSN)','kota_id' => 2]
        );

        DB::table('pool')->insert($kotas);
    }

}
