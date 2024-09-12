@extends('layouts.app')
@section('title', 'levels')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('level.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($levels as $key => $level)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $level->nama_level }}</td>
                        <td>
                            <a href="{{ route('level.edit', $level->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('level.destroy', $level->id) }}" method="post">
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
