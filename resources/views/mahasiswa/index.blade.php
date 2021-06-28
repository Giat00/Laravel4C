@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa

                   <a href="#" class="btn btn-md btn-primary float-right">Tambah Data</a> 

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat, TanggalLahir</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>


                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $mhs->id }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->tempat_lahir.','. $mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td></td>
                                <td>
                                    <a href="" class="btn bt-sm btn-warning">Edit</a><br>
                                    <a href="" class="btn bt-sm btn-danger">Hapus</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
