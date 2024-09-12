<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        $levels = Level::get();
        return view('user.create', compact('users', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'id_level' => 'required|integer',
        ]);
         
        $user = new User();
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->id_level = $request->input('id_level');
        $user->save();
         
        return redirect()->route('user.index')->with('message', 'Data berhasil simpan');
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
        $level = Level::get();
        $edit = User::find($id);
        return view('user.edit', compact('level', 'edit'));
        // $edit = User::findorFail($id);
        // return view('user.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'id_level' => 'required|integer',
        ]);
    
        $user = User::find($id);
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->email = $request->input('email');
        $user->id_level = $request->input('id_level');
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->to('user')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('user')->with('message', 'Data berhasil di hapus');
    }
}
