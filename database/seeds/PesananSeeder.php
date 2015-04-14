<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pesanan')->delete();

        $pesanans = array(
            ['id' => 0, 'jadwal_id' => 0]
        );

        DB::table('pesanan')->insert($pesanans);
    }

}
