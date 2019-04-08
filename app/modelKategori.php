<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKategori extends Model
{
    //
    protected $table = 'kategori';
    protected $fillabel = ['idkategori','jenis_kategori'];
}
