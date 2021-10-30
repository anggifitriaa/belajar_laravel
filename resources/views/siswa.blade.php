<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tampilkan data</h2>
    <ul>
        @foreach ($siswas as $siswas2)
        id : {{ $siswas2['id'] }} <br>
        nama : {{ $siswas2['nama'] }}<br>
        username : {{ $siswas2['username'] }}<br>
        email : {{ $siswas2['email'] }} <br>
        alamat : {{ $siswas2['alamat'] }} <br>
        mapel :
        @foreach($siswas2 ['mapel'] as $siswas3)
        <ul>
            <li> {{ $siswas3 }} </li>
</ul>
@endforeach
        <hr>
        @endforeach
</ul>
    
</body>
</html>