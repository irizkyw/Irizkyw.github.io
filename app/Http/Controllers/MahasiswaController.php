<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $list_mahasiswa = 
            $list_mahasiswa = [
                [
                    'nama' => 'DARMA CAHYONO',
                    'nim' => '1941720013',
                    'IPK' => 4.00,
                    'jurusan' => 'Teknologi Informatika'
                ],
                [
                    'nama' => 'Abdul Wasiul',
                    'nim' => '1241520013',
                    'IPK' => 3.89,
                    'jurusan' => 'Teknologi Informatika'
                ],
                [
                    'nama' => 'Rizky Kurniawan',
                    'nim' => '1941720013',
                    'IPK' => 3.78,
                    'jurusan' => 'Teknologi Informasi'
                ]
            ];

            return view('index', ['list_mahasiswa' => $list_mahasiswa]);
    }
}
