<?php namespace App\Http\Controllers;
use App\Models\Kota;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Request;

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
				$list_jadwal = Jadwal::where('asal_pool_id','=',$asal)->where('tujuan_pool_id','=',$tujuan)->where('tanggal','=',$tanggal)->get();
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
		return view('pesan');
	}

	public function konfirmasi()
	{
		return view('konfirmasi');
	}
}
