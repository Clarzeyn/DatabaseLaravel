{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Belanja</legend>
        @foreach ($alfian as $alfian)
            <table border="1" cellpadding="3">
                <tr>
                    <th colspan="5" style="text-align: center;">
                        {{$alfian['Nama']}}
                    </th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <th style="text-align: left">Barang</th>
                    @foreach($alfian['Barang'] as $key => $barang)
                        <td>{{$barang}}</td>
                    @endforeach
                        <td>
                            @if ($hasil >= 500001)
                                Cashback 10%
                             @elseif ($hasil <= 500000 || $hasil >= 250000) 
                                Cashback 5%
                             @elseif ($hasil <= 249999 || $hasil >= 0) 
                                Cashback 0
                             @else 
                                -
                            @endif
                        </td>
                </tr>
                <tr>
                    <th style="text-align: left"> Harga</th>
                    @foreach($alfian['Harga'] as $key => $harga)
                        <td> {{$harga}}</td>
                    @endforeach
                        <td>{{$hasil}}</td>
                </tr>
                 <tr>
                    <th colspan="5">Cashback</th>
                    <th>{{$hasil2}}</th>
                </tr>
                <tr>
                    <th colspan="5">Total Yang Harus Dibayar</th>
                    <th style="text-align: center">{{$hasil3}}</th>
                </tr>
            </table>
            <br>
        @endforeach
        
                @foreach ($dida as $dida)
            <table border="1" cellpadding="1">
                <tr>
                    <th colspan="4" style="text-align: center;">
                        {{$dida['Nama']}}
                    </th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <th style="text-align: left">Barang</th>
                    @foreach($dida['Barang'] as $key => $barang)
                        <td>{{$barang}}</td>
                    @endforeach
                        <td>
                            @if ($hasil_t >= 500001)
                                Cashback 10%
                             @elseif ($hasil_t <= 500000 || $hasil_t >= 250000) 
                                Cashback 5%
                             @elseif ($hasil_t <= 249999 || $hasil_t >= 0) 
                                Cashback 0
                             @else 
                                -
                            @endif
                        </td>
                </tr>
                <tr>
                    <th style="text-align: left"> Harga</th>
                    @foreach($dida['Harga'] as $key => $harga)
                        <td> {{$harga}}</td>
                    @endforeach
                        <td>{{$hasil_d}}</td>
                </tr>
                <tr>
                    <th colspan="4">Cashback</th>
                    <th>{{$hasil_t}}</th>
                </tr>
                <tr>
                    <th colspan="4">Total Yang Harus Dibayar</th>
                    <th>{{$hasiltt}}</th>
                </tr>
            </table>
                   <br>
            @endforeach
    </fieldset>
</body>
</html> --}}

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
        <legend>Belanja</legend>
        @foreach($belanja as $belanja)
            <table border="1" style="margin: 10px auto;">
                <tr>
                    <th colspan="6">Belanja {{$belanja['nama']}}</th>
                </tr>
                <tr>
                    @foreach($belanja['barang'] as $barang)
                        <th>{{$barang}}</th>
                    @endforeach
                    <th>Total Belanja</th>
                    <th>Cashback</th>
                </tr>
                <tr>
                    @php
                        $cc =0;
                        $hasil_1 = 0;    
                    @endphp
                    @foreach($belanja['belanja'] as $belanja)
                        @php
                            $hasil_1 += $belanja;
                        @endphp
                        <td>Rp. {{number_format($belanja,0,".",".")}}</td>
                    @endforeach
                        <td>Rp. {{number_format($hasil_1,0,".",".")}}</td>
                        @if($hasil_1 > 250000 && $hasil_1 <= 500000 )
                            @php
                                $cc = ($hasil_1 * 0.05)
                            @endphp
                        @elseif($hasil_1 > 500000)
                            @php
                                    $cc = ($hasil_1 * 0.10)
                            @endphp
                        @endif
                        <td>Rp. {{number_format($cc,0,".",".")}}</td>
                </tr>
                <tr>
                    <th colspan="3">Harga Setelah Diskon : </th>
                    @if($hasil_1 > 250000 && $hasil_1 <= 500000 )
                        @php
                            $hasil_1 -= ($hasil_1 * 0.05)
                        @endphp
                    @elseif($hasil_1 > 500000)
                        @php
                                $hasil_1 -= ($hasil_1 * 0.10)
                        @endphp
                    @endif
                    <td colspan="3" style="text-align: center">Rp. {{number_format($hasil_1,0,".",".")}}</td>
                </tr>
            </table>
        @endforeach
        

    </fieldset>
</body>
</html>