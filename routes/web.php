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

//  Route::get('biodata',function(){
//     $nama = "anggi fitria";
//     $jk = "perempuan";
//     $tempat_lahir = "bandung";
//     $ttl = "bandung 29 januari 2004";
//     $agama = "islam";
//     $alamat = "babakan cilebak";
//     $hobi  = "menari";

//     return "Nama : " .$nama. 
//     "<br> Jenis kelamin : ".$jk.
//     "<br> Tempat lahir : ".$tempat_lahir.
//     "<br> Ttl : ".$ttl.
//     "<br> Agama : ".$agama.
//     "<br> Alamat : ".$alamat.
//     "<br> Hobi : ".$hobi;
// }); 

// Route:: get('biodata2', function(){
//     return view('biodata',compact('nama','jk','tempat lahir','tanggal lahir','alamat','agama','hobi'));
// }); */

// route parameter
/*route::get('input/{nama}/{jk}/{tempat lahir}/{Ttl}/{agama}/{alamat}/{hobi}',function($nama,$jk,$tempat_lahir,$ttl,$agama,$alamat,$hobi){
    echo "Nama saya : ".$nama;
    echo "<br>Jenis kelamin : ".$jk;
    echo "<br>tempat lahir : ".$tempat_lahir;
    echo "<br>ttl : ".$ttl;
    echo "<br>agama : ".$agama;
    echo "<br>alamat : ".$alamat;
    echo "<br>hobi : ".$hobi;
});*/


route::get('blog',function (){
    $data = [
        ['id' => 1, 'title' => 'lorem ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'lorem ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'lorem ipsum 3', 'content' => 'content ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});
