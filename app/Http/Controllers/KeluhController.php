<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluh;

class KeluhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        Keluh::create($request->all());

        return redirect()->route('kontak')->with('success', 'successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keluh::create($request->all());

        return redirect()->route('kontak')->with('success', 'successfully');
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
        $keluh = Keluh::findOrFail($id);

        return view('dashboard.history.edit', compact('keluh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keluh = Keluh::findOrFail($id);

        $keluh->update($request->all());

        return redirect()->route('history.index')->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keluh = Keluh::findOrFail($id);
        $keluh->delete();
        return redirect()->route('history.index')->with('success', 'deleted successfully');
    }
}
