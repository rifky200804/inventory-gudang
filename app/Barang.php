<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'gudang_id',
        'kategori_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

    protected $primaryKey = 'id';
}
