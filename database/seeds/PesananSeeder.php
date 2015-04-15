<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder {

	public function run()
	{
        $id = 1;
        $day = 7;

		DB::table('pesanan')->delete();

        //generate jadwal dari BTC ke Pondok Indah
        for($h = 1; $h <= $day; $h++) {
            for ($i = 1; $i <= 16; $i++) {
                for ($j = 1; $j <= 8; $j++) {
                    $random = mt_rand(0, 100);
                    if ($random <= 50) {
                        $pesanans = array(
                            ['jadwal_id' => $id, 'nama_pemesan' => 'Kevin', 'no_telepon' => '0813285018', 'no_kursi' => $j]
                        );

                        DB::table('pesanan')->insert($pesanans);
                    }
                }
                $id += 1;
            }
            $id += 246;
        }

        //generate jadwal dari Pondok Indah ke BTC
        $id = 130;
        for($h = 1; $h <= $day; $h++) {
            for ($i = 1; $i <= 9; $i++) {
                for ($j = 1; $j <= 8; $j++) {
                    $random = mt_rand(0, 100);
                    if ($random <= 50) {
                        $pesanans = array(
                            ['jadwal_id' => $id, 'nama_pemesan' => 'Yudi', 'no_telepon' => '0813285018', 'no_kursi' => $j]
                        );

                        DB::table('pesanan')->insert($pesanans);
                    }
                }
                $id += 1;
            }
            $id += 253;
        }
    }

}
