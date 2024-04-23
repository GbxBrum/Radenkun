<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

route::get('dashadmin',[AdminController:: class,'indexadmin']);
route::get('transak',[AdminController:: class,'magat']);
route::get('infobuk',[AdminController:: class,'buuk']);
route::get('regisanggota',[AdminController:: class,'anggota']);
route::get('tambahkan',[AdminController:: class,'regis']);
route::post('registpost',[AdminController:: class,'regispost']);
// Route::get('CobaTemplate', function () {
//     return view('adminutama.index');
// });
// Route::get('transak', function () {
//     return view('adminutama.infotransaksi');
// });
// Route::get('infobuk', function () {
//     return view('adminutama.barang');
// });
