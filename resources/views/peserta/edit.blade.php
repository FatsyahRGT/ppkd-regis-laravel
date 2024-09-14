@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    <form action="{{ route('peserta.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Lolos/Tidak *</label>
            </div>
            <div class="col-sm-5">
                <select class="form-control" name="status" required>
                    <option value="" disabled>Pilih status</option>
                    <option value="1" {{ $edit->status == 'Lolos' ? 'selected' : '' }}>Lolos</option>
                    <option value="0" {{ $edit->status == 'Tidak Lolos' ? 'selected' : '' }}>Tidak Lolos</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
