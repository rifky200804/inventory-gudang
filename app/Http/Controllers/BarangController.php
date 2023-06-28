<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Gudang;
use App\KategoriBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('barangs as a')
                ->join('kategori_barangs as b','a.kategori_id','=','b.id')
                ->join('gudangs as c','a.gudang_id','=','c.id')
                ->select('a.*','b.nama_kategori as nama_kategori','c.nama_gudang as nama_gudang')->where('a.stok_barang','!=',0);
        $keyword = "";
        if(isset($request->keyword) && $request->keyword != ""){
            $keyword = $request->keyword;
            $data = $data->where("a.kode_barang",'LIKE','%'.$keyword.'%')
                    ->orWhere("a.nama_barang",'LIKE','%'.$keyword.'%')
                    ->orWhere("b.nama_kategori",'LIKE','%'.$keyword.'%')
                    ->orWhere("c.nama_gudang",'LIKE','%'.$keyword.'%');
        }
        $data = $data->paginate(10);
        // dd($data);
        return view('barang.index',compact('data','keyword'));
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
        $barang->stok_barang = $request->stok_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->gudang_id = $request->gudang_id;
        $barang->created_by = Auth::user()->name;
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
        $barang->stok_barang = $request->stok_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->gudang_id = $request->gudang_id;
        $barang->updated_by = Auth::user()->name;
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

    public function printPDF(Request $request){
        $data = DB::table('barangs as a')
                ->join('kategori_barangs as b','a.kategori_id','=','b.id')
                ->join('gudangs as c','a.gudang_id','=','c.id')
                ->select('a.*','b.nama_kategori as nama_kategori','c.nama_gudang as nama_gudang')->where('a.stok_barang','!=',0);

        if(isset($request->keyword) && $request->keyword != ""){
            $keyword = $request->keyword;
            $data = $data->where("a.kode_barang",'LIKE','%'.$keyword.'%')
                    ->orWhere("a.nama_barang",'LIKE','%'.$keyword.'%')
                    ->orWhere("b.nama_kategori",'LIKE','%'.$keyword.'%')
                    ->orWhere("c.nama_gudang",'LIKE','%'.$keyword.'%');
        }
        $data = $data->get();
    $pdf = PDF::loadView('barang.pdf',['data'=>$data]);
    $nameFile = "Data Barang_".time().".pdf";
    return $pdf->download($nameFile);
    }
    
}
