<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Peserta;
use App\Models\Level;
use App\Models\Jurusan;
use App\Models\Gelombang;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        $gelombangs = Gelombang::where('aktif', 1)->get(); // Execute the query using get()
        return view('welcome', compact('jurusans', 'gelombangs'));
    }
    

   public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'nama_lengkap' => 'required|max:100',
        'nik' => 'required|max:20',
        'kartu_keluarga' => 'required|max:20',
        'jenis_kelamin' => 'required|max:20',
        'tempat_lahir' => 'required|max:100',
        'tanggal_lahir' => 'required|date',
        'pendidikan_terakhir' => 'required|max:100',
        'nama_sekolah' => 'required|max:100',
        'kejuruan' => 'required|max:100',
        'nomor_hp' => 'required|max:15',
        'email' => 'required|email|unique:peserta_pelatihan,email',
        'aktivitas_saat_ini' => 'required|max:100',
        'jurusan' => 'required', // Validasi untuk jurusan
        'gelombang' => 'required' // Validasi untuk gelombang
    ]);

    // Menyimpan data ke database
    Peserta::create([
        'id_jurusan' => $request->jurusan, // Ambil dari input form
        'id_gelombang' => $request->gelombang, // Ambil dari input form
        'nama_lengkap' => $request->nama_lengkap,
        'nik' => $request->nik,
        'kartu_keluarga' => $request->kartu_keluarga,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'pendidikan_terakhir' => $request->pendidikan_terakhir,
        'nama_sekolah' => $request->nama_sekolah,
        'kejuruan' => $request->kejuruan,
        'nomor_hp' => $request->nomor_hp,
        'email' => $request->email,
        'aktivitas_saat_ini' => $request->aktivitas_saat_ini,
    ]);

    // Redirect atau respon sukses
    return redirect()->back()->with('success', 'Data berhasil disimpan');
}

}
