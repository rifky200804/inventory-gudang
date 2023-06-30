<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use App\KategoriBarang;
use App\Barang;


class DashboardController extends Controller
{
    public function index(){
        $gudang = Gudang::count();
        $kategoriBarang = KategoriBarang::count();
        $jenisBarang = Barang::count();
        // dd($jenisBarang);
        return view('dashboard',compact('gudang','kategoriBarang','jenisBarang'));
    }
}
