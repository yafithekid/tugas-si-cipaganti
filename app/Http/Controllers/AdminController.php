<?php namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kota;
use App\Models\Pesanan;
use App\Models\Pool;
use DB;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        $asal = Request::input('asal', null);
        $tujuan = Request::input('tujuan', null);
        $tanggal = Request::input('tanggal', '2015-14-20');

        $list_tanggal = Jadwal::getAllJadwal();

        $list_jadwal = null;
        $list_id_jadwal = null;
        $list_kota_pool = Kota::getPoolAsal();
        $list_tujuan_kota_pool = null;

        if ($asal !== null) {
            //query daftar tujuan
            $list_tujuan_kota_pool = Kota::getPoolTujuan($asal);

            if ($tujuan !== null) {
                //query jadwal
                $list_jadwal = Jadwal::where('asal_pool_id', '=', $asal)->where('tujuan_pool_id', '=', $tujuan)->where('tanggal', '=', $tanggal)->get();
            }
        }

        if ($asal != null && $tujuan != null) {
            $list_spesific_pesanan = Pesanan::getSpesificPesanan($asal, $tujuan, $tanggal);
        }

        return view('admin.index', compact('list_spesific_pesanan', 'tanggal', 'list_tanggal', 'list_kota_pool', 'list_jadwal', 'asal', 'tujuan', 'list_kota_pool', 'list_tujuan_kota_pool', 'list_pesanan'));
    }

    public function updateData()
    {
        $harga = Request::input('harga');
        $promo = Request::input('promo');
        $aktif = Request::input('aktif');
        var_dump($harga);
        var_dump($promo);
        var_dump($aktif);
    }

    public function getDataStatistic()
    {
        $asal = Request::input('asal');
        $tujuan = Request::input('tujuan');
        $tanggal = Request::input('tanggal');
        $waktu = Request::input('waktu');
        $pesanan = Pesanan::getPesanan($asal, $tujuan, $tanggal, $waktu);

    }
}
