<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexadmin(){
        return view ('adminutama.index');
    }
    public function magat(){
        return view ('adminutama.infotransaksi');
    }
    public function buuk(){
        return view ('adminutama.barang');
    }
    public function anggota(){
        return view ('adminutama.regisanggota');
    }
    public function regis(){
        return view ('authwkwk.registrasi');
    }
    public function regispost(Request $request){
        $q = new kasir();
        $q->create($request->all());

        //cek data yang di kirim user

        // $cek = $request->validate([
        //     'nama' => 'required|min:6',
        //     'alamat' => 'required|min:4',
        //     'telepon' => 'required|min:4',
        //     'username' => 'required|min:10',
        //     'password' => 'required',
        //     'level' => 'required',
             
        // ]);
        // $iq->create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'telepon' => $request->telepon,
        //     'Username' => $request->username,
        //     'Password' => $request->password,
        //     'Level' => $request->level
        // ]);
        return view ('adminutama/regisanggota');
    }
    
}
