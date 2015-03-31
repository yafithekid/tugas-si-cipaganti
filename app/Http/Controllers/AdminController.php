<?php namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pool;
use DB;
class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin.index',[
            'list_kota_pool' =>  Kota::getAllPool()
        ]);
    }

}
