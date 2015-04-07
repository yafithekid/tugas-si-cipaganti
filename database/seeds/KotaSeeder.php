<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('kota')->delete();

        $kotas = array(
            ['id' => 1, 'nama' => 'Bandung'],
            ['id' => 2, 'nama' => 'Jakarta']
        );

        DB::table('kota')->insert($kotas);
    }

}
