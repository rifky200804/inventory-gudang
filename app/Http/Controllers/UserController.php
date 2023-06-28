<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = User::all();
        // return view('user.index',compact('data'));
        if(isset($request->keyword) && $request->keyword != ""){
            $keyword = $request->keyword;
            $data = $data = User::where('name','LIKE','%'.$keyword.'%')->orWhere('username','LIKE','%'.$keyword.'%')->orWhere('role','LIKE','%'.$keyword.'%')->paginate(10);
        }else{
            $data = User::paginate(10);
        }
        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        $user = new User();
        //akses kolom kode terus isi dengan data input kode user
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        //simpen data ke database
        $user->save();
        //nampilin ke url produk
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //code...
            $data = User::where('id', $id)->first();
            // dd($data);
            if($data == null){
                return redirect()->route('user.index');
            }
            return view('user.show',compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('user.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //arahkan ke halaman edit
        $user = User::where('id', $id)->first();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'user berhasil dihapus');
    }
}
