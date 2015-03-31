<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pool extends Model {
    protected $table = 'pool';
    public function kota()
    {
        return $this->hasOne('App\Models\Kota','kota_id','id');
    }
}