<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Jadwal extends Model {
	protected $table = 'jadwal';

    public $timestamps = false;
    const JUMLAH_KURSI = 9;
    public function poolAsal()
    {
        return $this->belongsTo('App\Models\Pool','asal_pool_id','id');
    }

    public function poolTujuan()
    {
        return $this->belongsTo('App\Models\Pool','tujuan_pool_id','id');
    }

    public function getSisaKursi(){
        return self::JUMLAH_KURSI - DB::table('pesanan')->where('jadwal_id','=',$this->id)->count();
    }

    public static function getAllJadwal()
    {
        $jadwals = Jadwal::distinct()->select('tanggal')->orderBy('tanggal','ASC')->get();
        return $jadwals;
    }

    public static function updateJadwal($harga, $promo, $aktif, $id)
    {
        if($aktif == 'true')
        {
            $aktif = 1;
        } else {
            $aktif = 0;
        }
        if($promo == 'true')
        {
            $promo = 1;
        } else {
            $promo = 0;
        }
        DB::table('jadwal')->where('id',$id)->update(['harga'=>$harga,'aktif'=>$aktif,'promo'=>$promo]);
    }
}
