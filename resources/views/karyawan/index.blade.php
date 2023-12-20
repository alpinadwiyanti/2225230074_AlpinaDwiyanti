@extends('karyawan.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="position-relative">
                <div class="card">
                    <div class="card-header">
                        <h2>Formulir Data Karyawan</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/_karyawan/create') }}" class="btn btn-success btn-sm" title="Add New Karyawan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No Identitas</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($_karyawan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_identitas }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis_kelamin}}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->tanggal_masuk }}</td>
                                        <td>{{ $item->alamat }}</td>


 
                                        <td>
                                            <a href="{{ url('/_karyawan/' . $item->id) }}" title="View Karyawan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/_karyawan/' . $item->id . '/edit') }}" title="Edit Karyawan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/_karyawan' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Karyawan" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection