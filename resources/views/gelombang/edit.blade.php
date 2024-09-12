@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    <form action="{{ route('gelombang.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Gelombang *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->nama_gelombang }}" required type="text" class="form-control" name="nama_gelombang" placeholder="Nama Gelombang" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>


    </form>


@endsection
