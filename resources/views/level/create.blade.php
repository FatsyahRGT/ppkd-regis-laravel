@extends('layouts.app')
@section('title', 'Tambah Level')

@section('content')
<form action="{{route('level.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Level Role *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="nama_level" placeholder="Nama Level" id="">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </div>


</form>


@endsection
