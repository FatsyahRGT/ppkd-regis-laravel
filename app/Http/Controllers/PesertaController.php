<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use App\Models\Jurusan;
use App\Models\Gelombang;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Peserta::query();

        // Apply filters if present
        if ($request->has('nama_lengkap') && $request->get('nama_lengkap') != '') {
            $query->where('nama_lengkap', 'like', '%' . $request->get('nama_lengkap') . '%');
        }

        if ($request->has('id_jurusan') && $request->get('id_jurusan') != '') {
            $query->where('id_jurusan', $request->get('id_jurusan'));
        }

        if ($request->has('id_gelombang') && $request->get('id_gelombang') != '') {
            $query->where('id_gelombang', $request->get('id_gelombang'));
        }

        if ($request->filled('status')) {
            $status = (int) $request->status; // Convert to integer
            $query->where('status', $status);
        }

        $pesertas = $query->get();

        // Fetch jurusan and gelombang for the dropdowns
        $jurusans = Jurusan::all();
        $gelombangs = Gelombang::all();

        return view('peserta.index', compact('pesertas', 'jurusans', 'gelombangs'));
    }
    // public function index()
    // {
    //     $pesertas = Peserta::all();
    //     return view('peserta.index', compact('pesertas'));
    // }

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
    $peserta = Peserta::findOrFail($id);
    return view('peserta.detail', compact('peserta'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Peserta::findOrFail($id);
        return view('peserta.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $peserta = Peserta::findOrFail($id);
    $peserta->update(['status'=>$request->status]);
    return redirect()->route('peserta.index')->with('success', 'Peserta updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
