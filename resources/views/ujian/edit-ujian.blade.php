@extends('layouts.main')
@section('content')
    <h3>Edit Ujian</h3>
    <form action="/update-ujian/{{ $data->id }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" name="jenis_ujian" value="{{ $data->jenis_ujian }}" class="form-control" placeholder="Jenis Ujian">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="mata_pelajaran" value="{{ $data->mata_pelajaran }}" class="form-control" placeholder="Mata Pelajaran">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="dibuat_oleh" value="{{ $data->dibuat_oleh }}" class="form-control" placeholder="Dibuat Oleh">
                </div>
            </div>

        </div>
        <a href="/daftar-ujian">
            <button type="button" class="btn btn-warning">Kembali</button>
        </a>
        <button type="submit" style="color: white;" class="btn btn-success">Edit</button>
        </div>
    </form>
@endsection
