<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function makul()
    {
        $makul = Mahasiswa::all();
        return view('mahasiswa.makul', compact('makul'));
    }

    public function input()
    {
        return view('mahasiswa.input');
    }

    // public function insert(Request $request)
    // {
    //     Mahasiswa::create($request->all());
    //     return redirect('/mahasiswa');
    // }

    public function store(Request $request)
    {
        
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Dsimpan.');
        return redirect('/mahasiswa/makul');
    }

    public function edit($id)
    {
        $matkul = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Mahasiswa::find($id);
        $matkul->update($request->all());
        toast('Succes','Berhasil Diedit');
        return redirect('/mahasiswa/makul');
    }

    public function destroy($id)
    {
        $matkul = Mahasiswa::find($id);
        $matkul->delete();
        toast('Berhasil Dihapus','Succes');
        return redirect('/mahasiswa/makul');
    }    

}
