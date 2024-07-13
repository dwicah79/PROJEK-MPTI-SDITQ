<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::get();

        return view('dashboard.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image',
            'gambar2' => 'required|image',
            'gambar3' => 'required|image',
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            $input['gambar'] = $imageName;
        }
        if ($request->hasFile('gambar2')) {
            $file = $request->file('gambar2');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            $input['gambar2'] = $imageName;
        }
        if ($request->hasFile('gambar3')) {
            $file = $request->file('gambar3');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            $input['gambar3'] = $imageName;
        }

        About::create($input);

        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan');
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
        $about = About::findOrFail($id);

        return view('dashboard.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image',
            'gambar2' => 'nullable|image',
            'gambar3' => 'nullable|image',
        ]);

        $about = About::findOrFail($id);

        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except(['gambar', 'gambar2', 'gambar3']);

        // Handle file upload jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageName = time() . '_1.' . $file->getClientOriginalExtension();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($about->gambar) {
                unlink(public_path($destinationPath . $about->gambar));
            }
            $input['gambar'] = $imageName;
        }

        // Handle file upload untuk gambar2 jika ada
        if ($request->hasFile('gambar2')) {
            $file = $request->file('gambar2');
            $imageName = time() . '_2.' . $file->getClientOriginalExtension();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($about->gambar2) {
                unlink(public_path($destinationPath . $about->gambar2));
            }
            $input['gambar2'] = $imageName;
        }

        // Handle file upload untuk gambar3 jika ada
        if ($request->hasFile('gambar3')) {
            $file = $request->file('gambar3');
            $imageName = time() . '_3.' . $file->getClientOriginalExtension();
            $destinationPath = 'gambar_about/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($about->gambar3) {
                unlink(public_path($destinationPath . $about->gambar3));
            }
            $input['gambar3'] = $imageName;
        }

        // Perbarui data menggunakan method update pada model
        $about->update($input);

        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui.');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $about->delete();
        return redirect()->route('about.index')->with('success', 'deskripsi deleted successfully');
    }
}
