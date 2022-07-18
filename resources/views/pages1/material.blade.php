<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <hr>
    @if($pesanan == 'Pasir Urug')
    | Halo Pesanan Ke-1 Anda : {{$pesanan}}
        <br>| Harga {{$pesanan}} Rp. 50.000
    @elseif($pesanan == 'Batako Besar')
    | Halo Pesanan Ke-1 Anda : {{$pesanan}}
        <br>| Harga {{$pesanan}} Rp. 30.000 
    @elseif($pesanan == 'Bata Merah')
    | Halo Pesanan Ke-1 Anda : {{$pesanan}}
        <br>| Harga {{$pesanan}} Rp. 40.000 
    @elseif($pesanan == 'Batu Apung')
    | Halo Pesanan Ke-1 Anda : {{$pesanan}}
        <br>| Harga {{$pesanan}} Rp. 65.000 
    @else
    <br>
    Mohon Maaf Material Tidak Ada
    @endif
    <br><hr>
    @if($pesanan1 == 'Pasir Urug')
    | Halo Pesanan Ke-2 Anda : {{$pesanan1}}
        <br>| Harga {{$pesanan1}} Rp. 50.000
    @elseif($pesanan1 == 'Batako Besar')
    | Halo Pesanan Ke-2 Anda : {{$pesanan1}}
        <br>| Harga {{$pesanan1}} Rp. 30.000 
    @elseif($pesanan1 == 'Bata Merah')
    | Halo Pesanan Ke-2 Anda : {{$pesanan1}}
        <br>| Harga {{$pesanan1}} Rp. 40.000 
    @elseif($pesanan1 == 'Batu Apung')
    | Halo Pesanan Ke-2 Anda : {{$pesanan1}}
        <br>| Harga {{$pesanan1}} Rp. 65.000 
    @else
    <br>
    Mohon Maaf Material Tidak Ada
    @endif
    <hr>
</body>
</html>