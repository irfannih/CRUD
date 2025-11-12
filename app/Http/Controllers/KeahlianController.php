<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    public function index()
    {
        $keahlians = Keahlian::all();
        return view('crud.index', compact('keahlians'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'keahlian' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,svg,webp,gif,'
    ]);

    $fotoPath = null;
    if ($request->hasFile('foto')) {
        // Simpan ke storage/app/public/fotos
        $fotoPath = $request->file('foto')->store('fotos', 'public');
    }

    Keahlian::create([
        'nama' => $request->nama,
        'keahlian' => $request->keahlian,
        'foto' => $fotoPath,
    ]);

    return redirect()->route('crud.index')->with('success', 'Data berhasil ditambahkan!');
}


    public function edit($id)
    {
        $keahlian = Keahlian::findOrFail($id);
        return view('crud.edit', compact('keahlian'));
    }

    public function update(Request $request, $id)
    {
        $keahlian = Keahlian::findOrFail($id);

        $fotoPath = $keahlian->foto;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public');
        }

        $keahlian->update([
            'nama' => $request->nama,
            'keahlian' => $request->keahlian,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('crud.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Keahlian::destroy($id);
        return redirect()->route('crud.index')->with('success', 'Data berhasil dihapus!');
    }
}
