<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKatalog extends Model
{
    //
    protected $table = 'katalog';
    protected $fillabel = ['idkatalog','namamenu','pict','deskripsi','harga'];
}
