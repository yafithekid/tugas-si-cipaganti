<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {

	protected $table = 'pesanan';
    public $timestamps = false;
    protected $fillable = ['jadwal_id','nama_pemesan','no_telepon','no_kursi'];
}
