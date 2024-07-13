<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\prestasi;
use App\Models\About;
use App\Models\Visimisi;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::get();
        $about = About::all(); // asumsikan model untuk data about bernama About

        return view('welcome', compact('prestasi', 'about'));

    }

    public function abouts()
    {
        $about = About::get();

        return view('about', compact('about'));
    }

    public function teacher()
    {
        $guru = Guru::get();

        return view('teacher', compact('guru'));
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function visi()
    {
        $Visimisi = Visimisi::get();
        return view('visi', compact('Visimisi'));
    }

    public function kurikulum()
    {
        return view('kurikulum');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
