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
}