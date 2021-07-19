@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                    <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id )}}" method="post">
                    @csrf
                        <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                <option value="" disable selected>--Pilih User--</option>
                                    @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}>{{ $mhs->user->name }}</option>
                                    @endforeach         
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Nama Matakuliah</label>
                                <select name="makul_id" id="makul_id" class="form-control">
                                    <option value="" disable selected>--Pilih MataKuliah--</option>
                                        @foreach ($makul as $m)
                                    <option value="{{ $m->id }}" {{ $nilai->makul_id == $m->id ? 'selected' : '' }}>{{ $m->nama_makul }}</option>
                                        @endforeach         
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Nilai</label>
                                <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai" value="{{ is_null($nilai) ? '' : $nilai->nilai }}">
                            </div>
                        </div>
                     </div>
                     <div class="form-group">
                         <div class="form-row float-right">
                         <div class="col">
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <a href="{{ route('makul') }}" class="btn btn-md btn-danger">Kembali</a>
                            </div>
                         </div>
                     </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection