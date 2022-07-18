<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Televisi</legend>
        @foreach ($televisi as $televisi)
            <table border="1" style="margin-bottom: 30px">
                <tr>
                    <th colspan="4">
                        {{$televisi['Nama Channel']}}
                    </th>
                </tr>
                <tr>
                    <th>Acara</th>
                    <th>Jadwal Tayang</th>
                    <th>Jam</th>
                    <th>Tanggal Tayang</th>
                </tr>
                <tr>
                    @foreach ($televisi['Acara1'] as $item)
                        <td>{{$item}}</td>
                    @endforeach
                </tr>
                                <tr>
                    @foreach ($televisi['Acara2'] as $item)
                        <td>{{$item}}</td>
                    @endforeach
                </tr>
                                <tr>
                    @foreach ($televisi['Acara3'] as $item)
                        <td>{{$item}}</td>
                    @endforeach
                </tr>
            </table>
        @endforeach
    </fieldset>
</body>
</html>