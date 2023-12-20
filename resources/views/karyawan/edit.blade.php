@extends('karyawan.layout')
@section('content')

<div class="card">
    <div class="card-header">Perbaiki Data</div>
    </div class="card-body">

        <form action="{{ url('_karyawan/' .$_karyawan->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$_karyawan->id}}" id="id" />
            <label>No Identitas</label></br>
            <input type="text" name="no_identitas" id="no_identits" value="{{$_karyawan->no_identitas}}" class="form-control"></br>
            <label>Nama</label></br>
            <input type="text" name="nama" id="nama" value="{{$_karyawan->nama}}" class="form-control"></br>
            <label>Jenis Kelamin</label></br>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$_karyawan->jenis_kelamin}}" class="form-control"></br>
            <label>Jabatan</label></br>
            <input type="text" name="jabatan" id="jabatan" value="{{$_karyawan->jabatan}}" class="form-control"></br>
            <label>Tanggal Masuk</label></br>
            <input type="text" name="tanggal_masuk" id="tanggal_masuk" value="{{$_karyawan->tanggal_masuk}}" class="form-control"></br>
            <label>Alamat</label></br>
            <input type="text" name="alamat" id="alamat" value="{{$_karyawan->alamat}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop