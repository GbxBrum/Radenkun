<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    //
    public function kasir(){
        return view('kasirutama.indextrans');
    }
    public function transaksi(){
        return view('kasirutama.transaksi');
    }
}
