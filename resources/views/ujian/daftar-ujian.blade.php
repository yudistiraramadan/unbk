@extends('layouts.main')
@section('content')
    <h3>Daftar Ujian</h3>
    @if (auth()->user()->role_id == '1')
        <a href="/tambah-ujian">
            <button type="button" class="btn btn-success" style="color:white;">Tambah Data</button>
        </a>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Jenis Ujian</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Dibuat Oleh</th>
                    @if (auth()->user()->role_id == '1')
                        <th scope="col">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $x)
                    <tr>
                        <th>{{ $x->id }}</th>
                        <td>{{ $x->jenis_ujian }}</td>
                        <td>{{ $x->mata_pelajaran }}</td>
                        <td>{{ $x->dibuat_oleh }}</td>
                        @if (auth()->user()->role_id == '1')
                        <td>
                            <a href="/edit-ujian/{{ $x->id }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>
                            <a href="/hapus-ujian/{{ $x->id }}">
                                <button type="button" style="color: white;" class="btn btn-danger">Hapus</button>
                            </a>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
