<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data statis tanpa database
        $mahasiswa = [
            ['nama' => 'Bayu', 'nim' => '21001', 'jurusan' => 'Informatika'],
            ['nama' => 'Ani', 'nim' => '21002', 'jurusan' => 'Sistem Informasi'],
            ['nama' => 'Budi', 'nim' => '21003', 'jurusan' => 'Teknik Komputer']
        ];

        // kirim data ke view
        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
