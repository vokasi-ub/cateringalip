<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelOrder extends Model
{
    //
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    protected $fillabel = ['id_order','atasnama','nohp','alamat','jumlah','tgl_order','tgl_ambil'
    ,'harga_satuan','harga_total','statustransaksi'];

    public function get_katalog()
    {
        //join table dengan tabel katalog berdasarkan id
        return $this->belongsTo(modelKatalog::class,'idkatalog_fk');
    }
}
