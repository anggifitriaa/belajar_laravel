<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata',function(){
    $nama = "anggi fitria";
    $jk = "perempuan";
    $tempat_lahir = "bandung";
    $ttl = "bandung 29 januari 2004";
    $agama = "islam";
    $alamat = "babakan cilebak";
    $hobi  = "menari";

    return "Nama : " .$nama. 
    "<br> Jenis kelamin : ".$jk.
    "<br> Tempat lahir : ".$tempat_lahir.
    "<br> Ttl : ".$ttl.
    "<br> Agama : ".$agama.
    "<br> Alamat : ".$alamat.
    "<br> Hobi : ".$hobi;
});

Route:: get('biodata2', function(){
    return view('biodata',compact('nama','jk','tempat lahir','tanggal lahir','alamat','agama','hobi'));
});
