<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Jadwal extends Model {
	protected $table = 'jadwal';

    public $timestamps = false;
    const JUMLAH_KURSI = 8;
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

}
