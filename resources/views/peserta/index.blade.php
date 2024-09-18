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
                            <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-danger btn-xs">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mb-3">
        <form method="GET" action="{{ route('peserta.index') }}">
           <div class="row">
              <div class="col-md-3">
                 <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ request()->get('nama_lengkap') }}">
              </div>
              <div class="col-md-3">
                 <select name="id_jurusan" class="form-control">
                    <option value="">Jurusan</option>
                    @foreach($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}" {{ request()->get('id_jurusan') == $jurusan->id ? 'selected' : '' }}>
                       {{ $jurusan->nama_jurusan }}
                    </option>
                    @endforeach
                 </select>
              </div>
              <div class="col-md-3">
                 <select name="id_gelombang" class="form-control">
                    <option value="">Gelombang</option>
                    @foreach($gelombangs as $gelombang)
                    <option value="{{ $gelombang->id }}" {{ request()->get('id_gelombang') == $gelombang->id ? 'selected' : '' }}>
                       {{ $gelombang->nama_gelombang }}
                    </option>
                    @endforeach
                 </select>
              </div>
              <div class="col-md-3">
                 <select name="status" class="form-control">
                    <option value="">Status</option>
                    <option value="0" {{ request()->get('status') == '0' ? 'selected' : '' }}>Belum Diverifikasi</option>
                    <option value="1" {{ request()->get('status') == '1' ? 'selected' : '' }}>Lolos Administrasi</option>
                    <option value="2" {{ request()->get('status') == '2' ? 'selected' : '' }}>Tidak Lolos</option>
                 </select>
              </div>
           </div>
           <button type="submit" class="btn btn-primary mt-3">Filter</button>
        </form>
     </div>
@endsection
