<?php

namespace App\Http\Controllers;

use App\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gudang::all();
        return view('gudang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // simpen data tabel produkdari mode
        // // Simpan Data Tabel Kategori dari Model
        // $kategori_produk = KategoriProduk::all();
        // Kirim data ke view Create
        return view('gudang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat tambah data
        $gudang = new Gudang;
        //akses kolom kode terus isi dengan data input kode user
        $gudang->kode_gudang = $request->kode_gudang;
        $gudang->nama_gudang = $request->nama_gudang;
        //simpen data ke database
        $gudang->save();
        //nampilin ke url produk
        return redirect()->route('gudang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //code...
            $data = Gudang::where('id',$id)->first();
            // dd($data);
            if($data == null){
                return redirect()->route('gudang.index');
            }
            return view('gudang.show',compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('gudang.index');
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gudang $gudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        //
    }
}
