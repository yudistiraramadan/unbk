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

    public function edit($id)
    {
        $data = Ujian::find($id);
        return view('ujian.edit-ujian', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Ujian::findOrFail($id);
        $data->jenis_ujian = $request->jenis_ujian;
        $data->mata_pelajaran = $request->mata_pelajaran;
        $data->dibuat_oleh = $request->dibuat_oleh;
        $data->save();
        return redirect()->route('ujian');
    }
    public function delete($id)
    {
        $data = Ujian::find($id);
        $data->delete();
        return redirect('daftar-ujian');
    }


}
