<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        $Visimisi = Visimisi::get();

        return view('dashboard.Visimisi.index', compact('Visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Visimisi::create($request->all());

        return redirect()->route('visimisi.index')->with('success', 'successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Visimisi = Visimisi::findOrFail($id);

        return view('dashboard.Visimisi.edit', compact('Visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Visimisi = Visimisi::findOrFail($id);

        $Visimisi->update($request->all());
        return redirect()->route('visimisi.index')->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Visimisi = Visimisi::findOrFail($id);
        $Visimisi->delete();
        return redirect()->route('visimisi.index')->with('success', 'deleted successfully');
    }
}
