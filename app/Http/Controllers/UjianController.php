<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        $data = Ujian::all();
        return view('ujian.daftar-ujian', compact('data'));
    }
    public function create()
    {
        return view('ujian.tambah-ujian');
    }
    public function insert(Request $request)
    {
        $data = Ujian::create([
            'jenis_ujian' => $request->jenis_ujian,
            'mata_pelajaran' => $request->mata_pelajaran,
            'dibuat_oleh' => $request->dibuat_oleh,
        ]);
        // dd($data);
        $data->save();
        return redirect()->route('ujian');
    }

}
