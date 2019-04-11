<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKatalog extends Model
{
    //
    protected $table = 'katalog';
    protected $primaryKey = 'idkatalog';
    protected $fillabel = ['idkatalog','namamenu','pict','deskripsi','harga'];

    public function get_kategori()
    {
        //join table dengan tabel kategori berdasarkan id
        return $this->belongsTo(modelKategori::class,'idkategori_fk');
    }

}
