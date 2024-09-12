@extends('layouts.app')
@section('title', 'gelombangs')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('gelombang.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gelombang</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($gelombangs as $key => $gelombang)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $gelombang->nama_gelombang }}</td>
                        <td><input type="radio" name="aktif" class="status-radio" data-id="{{ $gelombang->id }}"
                            {{ $gelombang->aktif == 1 ? 'checked' : '' }}></td>
                        <td>
                            <a href="{{ route('gelombang.edit', $gelombang->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('gelombang.destroy', $gelombang->id) }}" method="post">
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
