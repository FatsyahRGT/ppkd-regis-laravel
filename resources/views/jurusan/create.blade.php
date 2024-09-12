@extends('layouts.app')
@section('title', 'Tambah Jurusan')

@section('content')
<form action="{{route('jurusan.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Jurusan *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="nama_jurusan" placeholder="Nama Jurusan" id="">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </div>


</form>


@endsection
