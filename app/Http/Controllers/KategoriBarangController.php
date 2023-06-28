<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KategoriBarang::paginate(10);
        return view('kategori.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
        $kategori = new KategoriBarang;
        //akses kolom kode terus isi dengan data input kode user
        $kategori->kode_kategori = $request->kode_kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        //simpen data ke database
        $kategori->save();
        //nampilin ke url produk
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //code...
            $data = KategoriBarang::where('id', $id)->first();
            // dd($data);
            if($data == null){
                return redirect()->route('kategori.index');
            }
            return view('kategori.show',compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('kategori.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //arahkan ke halaman edit
        $kategori = KategoriBarang::where('id', $id)->first();
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = KategoriBarang::find($id);
        $kategori->kode_kategori = $request->kode_kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = KategoriBarang::find($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'kategori berhasil dihapus');
    }
}
