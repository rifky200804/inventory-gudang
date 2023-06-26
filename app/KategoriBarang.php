<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = 'kategori_barangs';
   
    protected $fillable = [
        'id',
        'kode_kategori',
        'nama_kategori',
        'gudang_id'
    ];

    protected $primaryKey = 'id';
}
