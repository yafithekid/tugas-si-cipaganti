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
        $id = 1;
        $kotas = array(
            ['id' => $id++, 'nama' => 'Bandung Trade Center (BTC)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Pasteur Point','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Festival City Link (Citylink)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Miko Mall Kopo (Miko)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Dipati Ukur (DU)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Gatot Subroto 94 (Gatsu-94)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Cipaganti 75 (CPGT-75)','kota_id' => 1],
            ['id' => $id++, 'nama' => 'Gede Bage (GDBG)','kota_id' => 1],

            ['id' => $id++, 'nama' => 'Pondok Indah','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Mangga Dua Square (MG2)','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Pancoran (PNCRN)','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Dewi Sartika(DS)','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Rawamangun (RWMGN)','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Jatiwaringin (JTWRGN)','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Sumenep Blora','kota_id' => 2],
            ['id' => $id++, 'nama' => 'Kemanggisan (KMGSN)','kota_id' => 2]
        );

        DB::table('pool')->insert($kotas);
    }

}
