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
        <legend>Mahasiswa</legend>
        <table border="1">
            <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            </tr>
            @foreach ($mahasiswa as $mahasiswa)
            <tr>
                <td>{{$mahasiswa['Id']}}</td>
                <td>{{$mahasiswa['Nama']}}</td>
                <td>{{$mahasiswa['Nama Dosen']}}</td>
                <td>{{$mahasiswa['Mata Kuliah']}}</td>
                <td>{{$mahasiswa['Nilai']}}</td>
                <td> 
                    
            @if ($mahasiswa['Nilai'] >= 90 && $mahasiswa['Nilai'] <=100)
                Grade A
            @elseif ($mahasiswa['Nilai'] >= 80 && $mahasiswa['Nilai'] <=89)
                Grade B
            @elseif ($mahasiswa['Nilai'] >= 70 && $mahasiswa['Nilai'] <=79)
                Grade C
            @elseif ($mahasiswa['Nilai'] >= 50 && $mahasiswa['Nilai'] <=69)
                Grade D
            @elseif ($mahasiswa['Nilai'] >= 0 && $mahasiswa['Nilai'] <=49)
                Grade E
            @else
            Anda Belum Lulus
            @endif

            </td>
            </tr>
                            
            @endforeach
        </table>
    </fieldset>
</body>
</html>