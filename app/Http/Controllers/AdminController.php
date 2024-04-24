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
        $skuy = new kasir();

        return view ('adminutama.regisanggota',['burnbrain' => $skuy->all()]);
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
        //     'akses' => 'required',
             
        // ]);
        // $iq->create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'telepon' => $request->telepon,
        //     'Username' => $request->username,
        //     'Password' => $request->password,
        //     'akses' => $request->akses
        // ]);
        return redirect ('regisanggota');
    }
    public function loginkan(){
        return view ('authwkwk.login');
    }
    public function loginpost(Request $request){
        $el = new kasir();
        // cek username dan password exists (ada) di tabel masyarakat

        if ($el->where('Username', $request->input('Username'))->where('Password', $request->input('Password'))->exists()) {
            session(['Username' => $request->input('Username')]);
            return redirect('dashadmin');
        }
        return back()->with('pesan', 'Username dan password tidak terdaftar');
    }
    
}
