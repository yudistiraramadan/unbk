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

}
