@extends('layouts.app')
@section('title', 'Data Jurusan')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($jurusans as $key => $jurusan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('jurusan.destroy', $jurusan->id) }}" method="post">
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
