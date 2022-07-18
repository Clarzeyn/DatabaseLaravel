<?php

namespace App\Http\Controllers;

class PengenalanController extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Wildan Mochamad Nur Fallah";
        $umur = "17";
        return view('pages1.pengenalan', compact('nama', 'umur'));
    }
    public function intro($nama, $alamat, $umur)
    {
        return view('pages1.intro', compact('nama', 'alamat', 'umur'));
    }
    public function siswa()
    {
        $a = [
            array('Id' => 1, 'Nama' => 'Wildan', 'Umur' => 17, 'Kelas' => 'XII RPL 3', 'mapel' => ['B. Indonesia', 'B. Inggris']),
            array('Id' => 2, 'Nama' => 'Surya', 'Umur' => 17, 'Kelas' => 'XII RPL 3', 'mapel' => ['MTK', 'IPA']),
            array('Id' => 3, 'Nama' => 'Virgi', 'Umur' => 17, 'Kelas' => 'XII RPL 3', 'mapel' => ['SIMDIG', 'B. Sunda']),
            array('Id' => 4, 'Nama' => 'Rohesa', 'Umur' => 17, 'Kelas' => 'XII RPL 3', 'mapel' => ['Fisika', 'KWU']),
            array('Id' => 5, 'Nama' => 'Dzia', 'Umur' => 17, 'Kelas' => 'XII RPL 3', 'mapel' => ['PAI', 'Al-Quran']),
        ];
        return view('/pages1.siswa', ['siswa' => $a]);
    }
}
