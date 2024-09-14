@extends('layouts.app')
@section('title', 'Data Inputan Peserta')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('peserta.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Gelombang</th>
                    <th>Nama Lengkap</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pesertas as $key => $peserta)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $peserta->jurusan->nama_jurusan }}</td>
                        <td>{{ $peserta->gelombang->nama_gelombang }}</td>
                        <td>{{ $peserta->nama_lengkap }}</td>
                        <td>{{ $peserta->nomor_hp }}</td>
                        <td>{{ $peserta->email }}</td>
                        <td>
                            @if ($peserta->status == 1)
                                <div class="badge bg-primary">
                                    Lolos
                                </div>
                            @else
                                <div class="badge bg-danger">
                                    Tidak Lolos
                                </div>
                            @endif
                        </td>
                        <td>
                        
                            <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('peserta.destroy', $peserta->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('peserta.destroy', $peserta->id) }}" method="post">
                                @csrf   
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
