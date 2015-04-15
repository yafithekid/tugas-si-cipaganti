<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model {
	protected $table = 'jadwal';

    public function poolAsal()
    {
        return $this->belongsTo('App\Models\Pool','asal_pool_id','id');
    }

    public function poolTujuan()
    {
        return $this->belongsTo('App\Models\Pool','tujuan_pool_id','id');
    }

}
