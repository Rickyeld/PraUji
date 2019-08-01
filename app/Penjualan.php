<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['jumlah','total','tanggal','id_buku','id_kasir'];
    public $timestamps = true;

    public function buku()
    {
        return $this->belongsTo('App\Buku','id_buku');
    }

    public function kasir()
    {
        return $this->belongsTo('App\Kasir','id_kasir');
    }
}
