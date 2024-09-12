<?php

namespace App\Http\Controllers;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return view('level.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required|string',
        ]);
        
        $level = Level::create([
            'nama_level' => $request->input('nama_level'),
        ]);
        
        return redirect()->route('level.index')->with('message', 'Data berhasil simpan');
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
        $edit = Level::findorFail($id);
        return view('level.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $level = Level::findOrFail($id);
    
        $request->validate([
            'nama_level' => 'required|string',
        ]);
    
        $level->update([
            'nama_level' => $request->input('nama_level'),
        ]);
    
        return redirect()->route('level.index')->with('message', 'Data berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $levels = Level::findOrFail($id);
        $levels->delete();

        return redirect()->route('level.index')->with('success', 'data berhasil di hapus');
    }
}
