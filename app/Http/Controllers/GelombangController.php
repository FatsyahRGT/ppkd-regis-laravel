<?php

namespace App\Http\Controllers;
use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangs = Gelombang::orderBy('id', 'asc')->get();
        return view('gelombang.index', compact('gelombangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gelombang' => 'required|string',
            'aktif' => 'nullable|string',
        ]);
        
        $gelombang = Gelombang::create([
            'nama_gelombang' => $request->input('nama_gelombang'),
            'aktif' => 0
        ]);
        
        return redirect()->route('gelombang.index')->with('message', 'Data berhasil simpan');
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
        $edit = Gelombang::findorFail($id);
        return view('gelombang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
    
        $request->validate([
            'nama_gelombang' => 'required|string',
            'aktif' => 'nullable|string',
        ]);
    
        $gelombang->update([
            'nama_gelombang' => $request->input('nama_gelombang'),
            'aktif' => $request->aktif
        ]);
    
        return redirect()->route('gelombang.index')->with('message', 'Data berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gelombangs = Gelombang::findOrFail($id);
        $gelombangs->delete();

        return redirect()->route('gelombang.index')->with('success', 'data berhasil di hapus');
    }

    public function updateStatus($id): JsonResponse
    {
        //Select Profilenya, baru di update menjadi 0
        Gelombang::where('id', '!=', $id)->update(['aktif' => 0]);
        // Select Profilenya berdasarkan id lalu diupdate menjadi 1
        $gelombangs = Gelombang::findOrFail($id);
        $gelombangs->aktif = 1;
        $gelombangs->save();
        return response()->json(['success' => 'Status Berhasil di perbarui.']);
    }
}
