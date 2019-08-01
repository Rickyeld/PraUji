<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $fillable = ['jumlah','tanggal','id_distributor','id_buku'];
    public $timestamps = true;

    public function distributor()
    {
        return $this->belongsTo('App\Distributor','id_distributor');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku','id_buku');
    }
}
