@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    <form action="{{ route('user.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Lengkap *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->nama_lengkap }}" required type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Level <span class="text-danger"></span></label>
            </div>
            <div class="col-sm-5">
                <select name="id_level" id="" class="form-control">
                    <option value="">-- Pilih Level --</option>
                    @foreach ($level as $level )
                    <option {{ $level->id == $edit->id_level ? 'selected' : '' }} value="{{ $level->id }}">
                        {{ $level->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Email *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->email }}" required type="email" class="form-control" name="email" placeholder="Email" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Password *</label>
            </div>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" placeholder="Password" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>


    </form>


@endsection
