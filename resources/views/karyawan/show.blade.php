@extends('karyawan.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Karyawan</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">No Identitas  : {{ $_karyawan->no_identitas }}</h5>
            <h5 class="card-title">Nama  : {{ $_karyawan->nama }}</h5>
            <h5 class="card-title">Jenis Kelamin  : {{ $_karyawan->jenis_kelamin }}</h5>
            <h5 class="card-title">Jabatan  : {{ $_karyawan->jabatan }}</h5>
            <h5 class="card-title">Tanggal Masuk  : {{ $_karyawan->tanggal_masuk }}</h5>
            <h5 class="card-title">Alamat  : {{ $_karyawan->alamat }}</h5>

        </div>
    </div>