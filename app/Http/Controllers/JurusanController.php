<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string',
        ]);
        
        $jurusans = Jurusan::create([
            'nama_jurusan' => $request->input('nama_jurusan'),
        ]);
        
        return redirect()->route('jurusan.index')->with('message', 'Data berhasil simpan');
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
        $edit = Jurusan::findorFail($id);
        return view('jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jurusans = Jurusan::findOrFail($id);
    
        $request->validate([
            'nama_jurusan' => 'required|string',
        ]);
    
        $jurusans->update([
            'nama_jurusan' => $request->input('nama_jurusan'),
        ]);
    
        return redirect()->route('jurusan.index')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->delete();

        return redirect()->route('jurusan.index')->with('success', 'data berhasil di hapus');
    }
}
