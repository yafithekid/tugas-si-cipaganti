<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model {

	protected $table = 'pesanan';
    public $timestamps = false;
    protected $fillable = ['jadwal_id','nama_pemesan','no_telepon','no_kursi'];

    public static function getPesanan($asal, $tujuan, $tanggal, $waktu)
    {
        $list_jadwal_id = DB::table('jadwal')->select('id')->where('asal_pool_id',$asal)->where('tujuan_pool_id',$tujuan)->where('tanggal','<=',$tanggal)->where('waktu',$waktu)->lists('id');
        $list_pesanan = DB::table('pesanan')->select(DB::raw('count(*) as jumlah, jadwal.tanggal'))->join('jadwal','jadwal.id','=','pesanan.jadwal_id')->whereIn('jadwal_id',$list_jadwal_id)->groupBy('jadwal_id')->get();
        return $list_pesanan;
    }

    public static function getSpesificPesanan($asal, $tujuan, $tanggal)
    {
        $list_jadwal_id = DB::table('jadwal')->select('id')->where('asal_pool_id',$asal)->where('tujuan_pool_id',$tujuan)->where('tanggal',$tanggal)->lists('id');
        $list_pesanan = DB::table('pesanan')->select(DB::raw('count(*) as jumlah, jadwal_id'))->whereIn('jadwal_id',$list_jadwal_id)->groupBy('jadwal_id')->get();
        return $list_pesanan;
    }
}
