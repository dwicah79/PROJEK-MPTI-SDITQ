<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::paginate(5);

        return view('dashboard.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image',
            'fungsional' => 'required',
            'email' => 'required|email',
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_guru/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }

        Guru::create($input);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);

        return view('dashboard.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image',
            'fungsional' => 'required',
            'email' => 'required|email',
        ]);

        $guru = Guru::findOrFail($id);

        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');

        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_guru/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($guru->foto) {
                unlink(public_path($destinationPath . $guru->foto));
            }
            $input['foto'] = $imageName;
        }

        // Update data guru
        $guru->update($input);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'deskripsi deleted successfully');
    }
}
