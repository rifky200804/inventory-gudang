<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Gudang;
use App\KategoriBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Barang::paginate(10);
        return view('barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBarang::all();
        $gudang = Gudang::all();
        return view('barang.create', compact('kategori', 'gudang'));
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
        $barang = new Barang;
        //akses kolom kode terus isi dengan data input kode user
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->gudang_id = $request->gudang_id;
        //simpen data ke database
        $barang->save();
        //nampilin ke url produk
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //code...
            $data = Barang::where('id', $id)->first();
            // dd($data);
            if($data == null){
                return redirect()->route('barang.index');
            }
            return view('barang.show',compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('barang.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //arahkan ke halaman edit
        $kategori = KategoriBarang::all();
        $gudang = Gudang::all();
        $barang = Barang::where('id', $id)->first();
        return view('barang.edit', compact('barang', 'kategori', 'gudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->gudang_id = $request->gudang_id;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'barang berhasil dihapus');
    }
}
