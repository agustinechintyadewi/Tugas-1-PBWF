<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Shelter</title>
</head>
<body>
    <h1>DETAIL SHELTER</h1>
    <div class="container">
        <h2>List Hewan Adopsi</h2>
        <ul>
            @foreach ($hewan as $hewan)
                <li>
                    Nama : {{ $hewan->nama }} <br>
                    Jenis : {{$hewan->jenis}} <br>
                    Umur : {{$hewan->umur}} <br>
                    Kondisi : {{$hewan->kondisi}} <br>
                    Syarat Adopsi : {{$hewan->syarat}}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>