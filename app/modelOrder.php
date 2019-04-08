<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelOrder extends Model
{
    //
    protected $table = 'order';
    protected $fillabel = ['id_order','atasnama','nohp','alamat','jumlah','tgl_order','tgl_ambil'
    ,'harga_satuan','harga_total','statustransaksi'];
}
