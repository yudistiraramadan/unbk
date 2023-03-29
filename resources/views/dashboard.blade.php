@extends('layouts.main')
@section('content')
@if (auth()->user()->role_id == '1')
    <h4>Selamat Datang Admin</h4>
@endif
@if (auth()->user()->role_id == '2')
    <h4>Selamat Datang Guru</h4>
@endif
@endsection

