<?php namespace App\Http\Controllers;
use App\Models\Kota;
use App\Models\Jadwal;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function tiket()
	{
		$asal = Request::input('asal','1');
		$tujuan = Request::input('tujuan',null);
		$tanggal = Request::input('tanggal','2015-04-20');
		$list_jadwal = null;
		$list_kota_pool = Kota::getPoolAsal();
		$list_tujuan_kota_pool = null;

		if ($asal !== null){
			//query daftar tujuan
			$list_tujuan_kota_pool = Kota::getPoolTujuan($asal);
			
			if ($tujuan !== null){
				//query jadwal
				$list_jadwal = Jadwal::where('asal_pool_id','=',$asal)->where('tujuan_pool_id','=',$tujuan)->where('tanggal','=',$tanggal)->where('aktif','=',1)->get();
			}
		}
		return view('tiket',compact('list_jadwal','list_kota_pool','list_tujuan_kota_pool','asal','tujuan','tanggal'));
	}

	public function listTujuan(){
		$asal = Request::input('asal');
		$list_tujuan_kota_pool = Kota::getPoolTujuan($asal);
		$tujuan = null;
		return view('_list_tujuan',compact('list_tujuan_kota_pool','tujuan'));
	}

	public function pesan()
	{
		$jadwal_id = Request::input('jadwal_id');
		if ($jadwal_id === null){
			//belum pilih jadwal, redirect ke tiket
			return redirect()->route('tiket');
		} else {
			$jadwal = Jadwal::find($jadwal_id);
			//list daftar kursi yang kosong
			$list_pesanan = Pesanan::where('jadwal_id','=',$jadwal->id)->get();
			$kursi_terisi = [];
			for($i = 1; $i <= 9; ++$i){
				$kursi_terisi[$i] = false;
			}
			foreach ($list_pesanan as $pesanan) {
				$kursi_terisi[$pesanan->no_kursi] = true;
			}
			return view('pesan',compact('jadwal','kursi_terisi'));
		}
		
	}

	public function showKonfirmasi()
	{
		$jadwal_id = Request::input('jadwal_id');
		$nama_pemesan = Request::input('nama_pemesan');
		$no_telepon = Request::input('no_telepon');
		$no_kursi = Request::input('no_kursi');
		

		//buat objek, biar rapi
		$jadwal = Jadwal::findOrFail($jadwal_id);
		$pesanan = new Pesanan(['jadwal_id'=>$jadwal_id,'nama_pemesan' => $nama_pemesan,'no_telepon' => $no_telepon,'no_kursi'=>$no_kursi]);
		return view('konfirmasi',compact('jadwal','pesanan'));
	}

	public function postKonfirmasi()
	{
		$pesanan = new Pesanan([
			'jadwal_id' => Request::input('jadwal_id'),
			'nama_pemesan' => Request::input('nama_pemesan'),
			'no_telepon' => Request::input('no_telepon'),
			'no_kursi' => Request::input('no_kursi')
		]);
		$jadwal = Jadwal::findOrFail(Request::input('jadwal_id'));
		if ($pesanan->save()){
			return view('konfirmasi_berhasil');
		} else {
			return view('konfirmasi',compact('jadwal','pesanan'));
		}
	}
}
