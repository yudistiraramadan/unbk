@extends('layouts.main')
@section('content')
<h3>Daftar Ujian</h3>
<a href="">
    <button type="button" class="btn btn-success" style="color:white;">Tambah Data</button>
</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Jenis Ujian</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Dibuat Oleh</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $x)
            <tr>
                <th>{{ $x->id }}</th>
                <td>{{ $x->jenis_ujian }}</td>
                <td>{{ $x->mata_pelajaran }}</td>
                <td>{{ $x->dibuat_oleh }}</td>
                <td>
                    <a href="">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                    <a href="">
                        <button type="button" style="color: white;" class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
