<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    //
    public function tugas()
    {
        $a = [
            array('ab' => ['Beranda', 'Berita', 'Tentang'],
                'cd' => ['Olahraga', 'Politik', 'Manca Negara'],
                'ef' => ['Sepak bola', 'Bulu Tangkis']),
        ];
        // dd($a);
        return view('/pages1.tugas', ['tugas' => $a]);

    }

    public function mahasiswa()
    {
        $array = [
            array('Nama Dosen' => 'Yusuf Bachtiar', 'Mata Kuliah' => 'Pemograman Mobile', 'Id' => 1, 'Nama' => 'Muhammad Soleh', 'Nilai' => 78),
            array('Nama Dosen' => 'Yusuf Bachtiar', 'Mata Kuliah' => 'Pemograman Mobile', 'Id' => 2, 'Nama' => 'Jujun Junaedi', 'Nilai' => 85),
            array('Nama Dosen' => 'Yusuf Bachtiar', 'Mata Kuliah' => 'Pemograman Mobile', 'Id' => 3, 'Nama' => 'Mamat Alkatiri', 'Nilai' => 90),
            array('Nama Dosen' => 'Yusuf Bachtiar', 'Mata Kuliah' => 'Pemograman Mobile', 'Id' => 4, 'Nama' => 'Ubay Holin', 'Nilai' => 87),
            array('Nama Dosen' => 'Yusuf Bachtiar', 'Mata Kuliah' => 'Pemograman Mobile', 'Id' => 5, 'Nama' => 'Fadillah', 'Nilai' => 95),

            array('Nama Dosen' => 'Yaris Riyadi', 'Mata Kuliah' => 'Pemograman Website', 'Id' => 1, 'Nama' => 'Alfred McTomminay', 'Nilai' => 67),
            array('Nama Dosen' => 'Yaris Riyadi', 'Mata Kuliah' => 'Pemograman Website', 'Id' => 2, 'Nama' => 'Bruno Kasmir', 'Nilai' => 90),
            array('Nama Dosen' => 'Yaris Riyadi', 'Mata Kuliah' => 'Pemograman Website', 'Id' => 3, 'Nama' => 'Akid Hendra', 'Nilai' => 50),
            array('Nama Dosen' => 'Yaris Riyadi', 'Mata Kuliah' => 'Pemograman Website', 'Id' => 4, 'Nama' => 'Dany Irawan', 'Nilai' => 70),
            array('Nama Dosen' => 'Yaris Riyadi', 'Mata Kuliah' => 'Pemograman Website', 'Id' => 5, 'Nama' => 'Chandra Mega Putra', 'Nilai' => 60),

        ];
        return view('/pages1.mahasiswa', ['mahasiswa' => $array]);
    }
    public function televisi()
    {
        $a = [
            ['Nama Channel' => 'NET TV',
                'Acara1' => ['Ini Talk Show', 'Jumat', '05.00', '23/03/2022'],
                'Acara2' => ['Rahasia Hati', 'Minggu', '07.00', '24/03/2022'],
                'Acara3' => ['Jaguar', 'Rabu', '05.00', '25/03/2022'],
            ],
            ['Nama Channel' => 'TVRI',
                'Acara1' => ['Wayang', 'Senin', '22.00', '12/02/2022'],
                'Acara2' => ['Berita', 'Selasa', '05.00', '01/11/2022'],
                'Acara3' => ['Musik Sunda', 'Rabu', '10.00', '22/01/2022'],
            ],
            ['Nama Channel' => 'BEINSPORT',
                'Acara1' => ['Bulu Tangkis', 'Senin', '16.00', '10/03/2022'],
                'Acara2' => ['Sepak Bola', 'Selasa', '20.00', '23/03/2022'],
                'Acara3' => ['Tenis', 'Rabu', '03.00', '25/03/2022'],
            ],
            ['Nama Channel' => 'Ochannel',
                'Acara1' => ['I-Musik', 'Senin', '14.00', '10/03/2022'],
                'Acara2' => ['Drakor', 'Selasa', '17.00', '05/03/2022'],
                'Acara3' => ['Cooking Mama', 'Rabu', '09.00', '01/03/2022'],
            ],
            ['Nama Channel' => 'Indosiar',
                'Acara1' => ['Azab', 'Kamis', '17.00', '22/03/2022'],
                'Acara2' => ['Piala Presiden', 'Sabtu', '20.00', '01/03/2022'],
                'Acara3' => ['Drakor', 'Rabu', '15.00', '01/03/2022'],
            ],
        ];
        return view('/pages1.televisi', ['televisi' => $a]);
    }

    public function challenge()
    {
        // $alfian = [
        //     [
        //         'Nama' => 'Alfian',
        //         'Barang' => ['sepatu', 'baju', 'celana', 'kupluk'],
        //         'Harga' => [250000, 100000, 150000, 100000],
        //     ],
        // ];

        // foreach ($alfian as $key => $value) {
        //     $hasil = array_sum($value['Harga']);
        //     if ($hasil >= 500001) {
        //         $cashback = 0.1;
        //     } elseif ($hasil <= 500000 || $hasil >= 250000) {
        //         $cashback = 0.05;
        //     } elseif ($hasil <= 249999 || $hasil >= 0) {
        //         $cashback = 0;
        //     } else {

        //     }

        // }
        // $hasil2 = $hasil * $cashback;
        // $hasil3 = $hasil - $hasil2;

        // $dida = [
        //     [
        //         'Nama' => 'Dida',
        //         'Barang' => ['topi', 'baju', 'celana'],
        //         'Harga' => [100000, 75000, 125000],
        //     ],
        // ];
        // foreach ($dida as $value) {
        //     $hasil_d = array_sum($value['Harga']);
        //     if ($hasil_d >= 500001) {
        //         $cashback1 = 0.1;
        //     } elseif ($hasil_d <= 500000 || $hasil_d >= 250000) {
        //         $cashback1 = 0.05;
        //     } elseif ($hasil_d <= 249999 || $hasil_d >= 0) {
        //         $cashback1 = 0;
        //     } else {

        //     }
        // }

        // $hasil_t = $hasil_d * $cashback1;
        // $hasiltt = $hasil_d - $hasil_t;
        // return view('/pages1.belanja', ['alfian' => $alfian, 'dida' => $dida],
        //     compact('hasil', 'hasil3', 'hasil_d', 'hasil_t', 'hasiltt', 'alfian', 'dida', 'hasil2'),
        // );
        $a = [
            'Alfian' => [
                'nama' => "Alfian",
                'barang' => ['Sepatu', "Baju", "Celana", "Kupluk"],
                'belanja' => [250000, 100000, 150000, 100000],
            ],
            'Dida' => [
                'nama' => "Dida",
                'barang' => ['Topi', 'Baju', 'Celana'],
                'belanja' => [100000, 75000, 125000],
            ],
        ];

        return view('pages1.belanja', ['belanja' => $a]);

    }
}
