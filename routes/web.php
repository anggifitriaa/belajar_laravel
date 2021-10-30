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


/*route::get('blog',function (){
    $data = [
        ['id' => 1, 'title' => 'lorem ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'lorem ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'lorem ipsum 3', 'content' => 'content ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});

Route::get('siswa', function(){
    $data = [
        ['nis' => 1,'nama' => 'alya nurlia', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'nata endah'],
        ['nis' => 2,'nama' => 'anggi fitria', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'andara'],
        ['nis' => 3,'nama' => 'anisa andriani', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'bojong'],
        ['nis' => 4,'nama' => 'arif muhamad iqbal', 'kelas' => 'XII RPL 3', 'jk' => 'laki-laki', 'alamat' => 'cibedug'],
        ['nis' => 5,'nama' => 'astri fitriana mustika', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'pasawahan'],
        ['nis' => 6,'nama' => 'azhar', 'kelas' => 'XII RPL 3', 'jk' => 'laki-laki', 'alamat' => 'rancamanyar'],
        ['nis' => 7,'nama' => 'aziz tubagus ', 'kelas' => 'XII RPL 3', 'jk' => 'laki-laki', 'alamat' => 'bandung'],
        ['nis' => 8,'nama' => 'bima putra', 'kelas' => 'XII RPL 3', 'jk' => 'laki-laki', 'alamat' => 'rancamanyar'],
        ['nis' => 9,'nama' => 'cindy nurul', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'rancamanyar'],
        ['nis' => 10,'nama' => 'dinda dwi', 'kelas' => 'XII RPL 3', 'jk' => 'perempuan', 'alamat' => 'rancamanyar'],


    ];
    return view('siswa', compact('data'));
});*/

/*Route::get('siswa', function(){
    $siswas = [
        ['id' =>1,
        'nama' => 'Anggi fitria',
        'username' => 'Anggi Fitria',
        'email' => 'anggianjj@gmail.com',
        'alamat' => 'bandung',
        'mapel' => [
            'mapel1' => 'Bahasa indonesia',
            'mapel2' => 'Bahasa inggris',
            'mapel3' => 'Bahasa jepang',
            'mapel4' => 'Bahasa belanda',
        ]
        ],
    ];
    return view('siswa', compact('siswas'));
});*/

//route parameter optional
/*route::get('input/{nama?}/{kelas}', function($nama,$kelas){
    echo "nama saya : ".$nama;
    echo "<br>";
    echo "kelas : ".$kelas;
});*/


/*Route::get('/ujian/{nama?}/{kelas?}/{mtk?}/{indo?}/{inggris?}/{produktif?}', 
         function (
             $nama = null, 
             $kelas = null,
             $mtk = null, 
             $indo = null, 
             $inggris = null, 
             $produktif = null) {
             echo "Nama : " . $nama . "<br>";
             echo "Kelas : " . $kelas . "<br>";
             echo "Nilai Matemarika : " . $mtk . "<br>";
             echo "Nilai Indonesia : " . $indo . "<br>";
             echo "Nilai Inggris : " . $inggris . "<br>";
             echo "Nilai Produktif : " . $produktif . "<br>";
             $nilai = ($mtk + $indo + $inggris + $produktif) / 4;
             echo "Nilai Rata-rata adalah : " . $nilai;
            if($nilai >= 90 && $nilai <= 100){
               $grade = "A";
            }
            elseif($nilai >= 80 && $nilai <= 90){
                $grade = "B";
            }
            elseif($nilai >= 70 && $nilai <= 80){
                $grade = "C";
            }
            elseif($nilai >= 70 && $nilai <= 0){
                $grade = "D";
            }
            else{
                $grade = "Anda kurang pintar";
            }
            echo "<p>Grade : " .$grade. "</p>";
             });*/

            /* Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

                if ($makanan && $minuman && $cemilan != null) {
                    return "Anda memesan Makanan = $makanan <br>
                             Anda memesan Minuman = $minuman <br>
                             Anda memesan Cemilan = $cemilan";
                 } else if ($makanan && $minuman != null) {
                     return "Anda memesan Makanan = $makanan <br>
                             Anda memesan Minuman = $minuman";
                 } else if ($makanan || $minuman != null) {
                     return $makanan != null ? "Anda Memesan Makanan : $makanan" : "Anda Memesan Minuman : $minuman";
                 } else {
                     return "Anda Tidak Memesan Apapun Silahkan Pulang";
                         }
            
            });*/

            // menampilkan DATA POSR
            Route::get('/testmodel', function () {
                $query = App\models\post::all();
                return $query;
            });