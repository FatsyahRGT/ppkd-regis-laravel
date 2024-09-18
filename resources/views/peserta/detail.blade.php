@extends('layouts.app')
@section('title', 'Detail Peserta')

@section('content')
<style>
    .table th, .table td {
        text-align: left; /* Mengatur teks agar rata kiri */
        padding: 8px; /* Menambahkan jarak di dalam sel tabel */
    }
    .table th {
        width: 30%; /* Lebar kolom label (kiri) */
    }
    .table td {
        width: 70%; /* Lebar kolom data (kanan) */
    }
</style>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <td>{{ 1 }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ optional($peserta->jurusan)->nama_jurusan ?? 'Jurusan tidak ditemukan' }}</td>
            </tr>
            <tr>
                <th>Gelombang</th>
                <td>{{ optional($peserta->gelombang)->nama_gelombang ?? 'Gelombang tidak ditemukan' }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $peserta->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $peserta->nik }}</td>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <td>{{ $peserta->kartu_keluarga }}</td>
            </tr>    
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $peserta->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $peserta->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $peserta->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>{{ $peserta->pendidikan_terakhir }}</td>
            </tr>   
            <tr>
                <th>Nama Sekolah</th>
                <td>{{ $peserta->nama_sekolah }}</td>
            </tr>
            <tr>
                <th>Kejuruan</th>
                <td>{{ $peserta->kejuruan }}</td>
            </tr>
            <tr>
                <th>No Handphone</th>
                <td>{{ $peserta->nomor_hp }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $peserta->email }}</td>
            </tr>
            <tr>
                <th>Aktivitas Saat Ini</th>
                <td>{{ $peserta->aktivitas_saat_ini }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if ($peserta->status == 1)
                        <div class="badge bg-primary">Lolos</div>
                    @else
                        <div class="badge bg-danger">Tidak Lolos</div>
                    @endif
                </td>
            </tr>
        </thead>   
    </table>
</div>
@endsection
