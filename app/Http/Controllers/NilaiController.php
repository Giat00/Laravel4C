<?php

namespace App\Http\Controllers;


use App\Nilai;
use App\Makul;
use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class NilaiController extends Controller
{
    public function index(){
         // select * from nama_tabl
        $mahasiswa = Nilai::with(['mahasiswa'])->get();
        $makul = Nilai::with(['makul'])->get();
        return view ('nilai.index', compact('mahasiswa','makul'));
    }
    public function create(){
        $mahasiswa = Mahasiswa::all('user_id', 'id');
        $makul = Makul::all('nama_makul', 'id');
        return view ('nilai.create', compact('makul','mahasiswa'));
    }
    public function store(Request $request){
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }
    public function edit($id){
        // $user = User::all('name', 'id');
        $mahasiswa = Mahasiswa::all('user_id', 'id');
        $makul = Makul::all('nama_makul', 'id');
        $nilai = Nilai::find($id);
        return view ('nilai.edit', compact('nilai','makul','mahasiswa'));
    }
    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data sudah diedit','success');
        return redirect()->route('nilai');
    }

    public function del($id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Data sudah dihapus','success');
        return redirect()->route('nilai');
    }
}
