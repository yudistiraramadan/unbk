<?php

namespace Database\Seeders;

use App\Models\Ujian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ujian::create([
            'id' => '1',
            'jenis_ujian' => 'Pilihan Ganda',
            'mata_pelajaran' => 'Algoritma Pemrogramman',
            'dibuat_oleh' => 'Dwi Novia Prasetyani',
        ]);
        Ujian::create([
            'id' => '2',
            'jenis_ujian' => 'Soal Essay',
            'mata_pelajaran' => 'PBO 2',
            'dibuat_oleh' => 'Anton Widyanto',
        ]);
        Ujian::create([
            'id' => '3',
            'jenis_ujian' => 'Praktikum',
            'mata_pelajaran' => 'Praktikum Web 2',
            'dibuat_oleh' => 'Prih Diantana Abdau',
        ]);
    }
}
