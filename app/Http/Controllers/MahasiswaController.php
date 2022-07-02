<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', [
            'active' =>  'mahasiswa',
            'mahasiswa' =>  $mahasiswa,
        ]);
    }

    public function create()
    {
        return view('mahasiswa.create', [
            'active' =>  'mahasiswa',
        ]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'active' =>  'mahasiswa',
            'mahasiswa' =>  $mahasiswa,
        ]);
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', [
            'active' =>  'mahasiswa',
            'mahasiswa' =>  $mahasiswa,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dibuat.');
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $rules = [
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
        ];

        if ($request->nim != $mahasiswa->nim) {
            $rules['nim'] = 'required|unique:mahasiswas';
        }

        $request->validate($rules);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diedit.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
