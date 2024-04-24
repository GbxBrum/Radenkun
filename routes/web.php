<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;
// admin
route::get('dashadmin',[AdminController:: class,'indexadmin']);
route::get('transak',[AdminController:: class,'magat']);
route::get('infobuk',[AdminController:: class,'buuk']);
route::get('regisanggota',[AdminController:: class,'anggota']);
route::get('tambahkan',[AdminController:: class,'regis']);
route::post('registpost',[AdminController:: class,'regispost']);
route::get('lojin',[AdminController:: class,'loginkan']);
route::post('lojinn',[AdminController:: class,'loginpost']);




// end

// kasir
route::get('indexkasir',[KasirController:: class,'kasir']);
route::get('transaksi',[KasirController:: class, 'transaksi']);
// end

