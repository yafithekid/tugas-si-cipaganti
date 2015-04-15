<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Kota extends Model {
    protected $table = 'kota';

    public static function getAllPool(){

        $list_table = DB::table('kota')->select('kota.nama as kota','pool.id as pool_id','pool.nama as nama')->join('pool','pool.kota_id','=','kota.id')->get();
        $result = [];
        foreach($list_table as $pool){
            if (!isset($result[$pool->kota])){
                $result[$pool->kota] = [];
            }
            array_push($result[$pool->kota],$pool);
        }
        return $result;
    }

    public static function getPoolAsal(){
        $array_pool_aktif = DB::table('jadwal')->select('jadwal.asal_pool_id')->distinct()->lists('asal_pool_id');
        $list_table = DB::table('kota')
            ->select('kota.nama as kota','pool.id as pool_id','pool.nama as nama')
            ->join('pool','pool.kota_id','=','kota.id')
            ->whereIn('pool.id',$array_pool_aktif)
            ->get();
        foreach($list_table as $pool){
            if (!isset($result[$pool->kota])){
                $result[$pool->kota] = [];
            }
            array_push($result[$pool->kota],$pool);
        }
        return $result;
    }

    /**
     * @var $asal_pool_id int
     */
    public static function getPoolTujuan($asal_pool_id){
        $array_pool_aktif = DB::table('jadwal')->select('jadwal.tujuan_pool_id')->where('jadwal.asal_pool_id','=',$asal_pool_id)->distinct()->lists('tujuan_pool_id');
        $list_table = DB::table('kota')
            ->select('kota.nama as kota','pool.id as pool_id','pool.nama as nama')
            ->join('pool','pool.kota_id','=','kota.id')

            ->whereIn('pool.id',$array_pool_aktif)
            ->get();
        foreach($list_table as $pool){
            if (!isset($result[$pool->kota])){
                $result[$pool->kota] = [];
            }
            array_push($result[$pool->kota],$pool);
        }
        return $result;
    }
}