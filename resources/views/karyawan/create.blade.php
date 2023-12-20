@extends('karyawan.layout')
@section('content')

<div class="card">
    <div class="card-header">Data Karyawan</div>
    </div class="card-body">

        <form action="{{ url('_karyawan') }}" method="post">
            {!! csrf_field() !!}
            <label>No Identitas</label></br>
            <input type="text" name="no_identitas" id="no_identitas" class="form-control"></br>
            <label>Nama</label></br>
            <input type="text" name="nama" id="nama" class="form-control"></br>
            <label>Jenis Kelamin</label></br>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"></br>
            <label>Jabatan</label></br>
            <input type="text" name="jabatan" id="jabatan" class="form-control"></br>
            <label>Tanggal Masuk</label></br>
            <input type="text" name="tanggal_masuk" id="tanggal_masuk" class="form-control"></br>
            <label>Alamat</label></br>
            <input type="text" name="alamat" id="alamat" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop