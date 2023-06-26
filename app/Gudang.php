<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudangs';
   
    protected $fillable = [
        'id',
        'kode_gudang',
        'nama_gudang'
    ];

    protected $primaryKey = 'id';
}
