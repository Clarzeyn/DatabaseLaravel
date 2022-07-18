<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Siswa</legend>
        @foreach($siswa as $murid)
            Id : {{$murid['Id']}}<br>
            Nama : {{$murid['Nama']}} <br>
            Umur : {{$murid['Umur']}}<br>
            Status : 
            @if ($murid['Umur'] >= 17)
                Anda Berhak Mendapatkan Sim
            @else
            Anda Belum Berhak Mendapatkan Sim
            @endif
            <br>
            Kelas: {{$murid['Kelas']}}
            <br>
            Daftar Mata Pelajaran :
            <br>
            @foreach ($murid['mapel'] as $mapel)
                <li>{{$mapel}}</li>
            @endforeach<hr>
        @endforeach
    </fieldset>
</body>
</html>