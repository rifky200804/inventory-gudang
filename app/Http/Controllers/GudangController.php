<?php

namespace App\Http\Controllers;

use App\Gudang;
use Illuminate\Http\Request;
use Auth;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->keyword) && $request->keyword != ""){
            $keyword = $request->keyword;
            $data = $data = Gudang::where('nama_gudang','LIKE','%'.$keyword.'%')->orWhere('kode_gudang','LIKE','%'.$keyword.'%')->paginate(10);
        }else{
            $data = Gudang::paginate(10);
        }
        return view('gudang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $gudang->created_by = Auth::user()->name;
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
            $data = Gudang::where('id',$id)->first();
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
    public function edit($id)
    {
        //arahkan ke halaman edit
        $gudang = Gudang::where('id', $id)->first();
        return view('gudang.edit', compact('gudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gudang = Gudang::find($id);
        $gudang->kode_gudang = $request->kode_gudang;
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->updated_by = Auth::user()->name;
        $gudang->save();
        return redirect()->route('gudang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();

        return redirect()->route('gudang.index')->with('success', 'gudang berhasil dihapus');
    }
}
