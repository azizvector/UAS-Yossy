<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index()
    {
        $postingan = Postingan::all();

        return view('postingan.index', [
            'active' =>  'postingan',
            'postingan' =>  $postingan,
        ]);
    }

    public function create()
    {
        $kategori = Kategori::all();

        return view('postingan.create', [
            'active' =>  'postingan',
            'kategori' =>  $kategori,
        ]);
    }

    public function edit(Postingan $postingan)
    {
        $kategori = Kategori::all();

        return view('postingan.edit', [
            'active' =>  'postingan',
            'postingan' =>  $postingan,
            'kategori' =>  $kategori,
        ]);
    }

    public function show(Postingan $postingan)
    {
        return view('postingan.show', [
            'active' =>  'postingan',
            'postingan' =>  $postingan,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
        ]);

        Postingan::create($request->all());

        return redirect()->route('postingan.index')->with('success', 'Postingan berhasil dibuat.');
    }

    public function update(Request $request, Postingan $postingan)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required',
        ]);

        $postingan->update($request->all());

        return redirect()->route('postingan.index')->with('success', 'Postingan berhasil diedit.');
    }

    public function destroy(Postingan $postingan)
    {
        $postingan->delete();

        return redirect()->route('postingan.index')->with('success', 'Postingan berhasil dihapus.');
    }
}
