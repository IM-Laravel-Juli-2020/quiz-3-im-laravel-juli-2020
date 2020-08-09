@extends('layouts.master')
@section('title', 'Ubah Proyek')
    
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">UbahProyek</h5>
            </div>
            <div class="card-body">
                <form action="/proyek/{{ $data->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama_proyek">Nama Proyek</label>
                    <input type="text" class="form-control @error('nama_proyek') is-invalid @enderror" name="nama_proyek" id="nama_proyek" value="{{ old('nama_proyek', $data->nama_proyek) }}">
                    @error('nama_proyek')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="{{ old('tanggal_mulai', $data->tanggal_mulai) }}">
                </div>
                <div class="form-group">
                    <label for="tanggal_deadline">Tanggal Deadline</label>
                    <input type="date" class="form-control" name="tanggal_deadline" id="tanggal_deadline" value="{{ old('tanggal_deadline', $data->tanggal_deadline) }}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="custom-select">
                        <option value="0" @if ($data->status == false)
                            checked
                        @endif>Belum Selesai</option>
                        <option value="1" @if ($data->status == true)
                            checked
                        @endif>Selesai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="manajer_id">Manajer ID</label>
                    <input type="number" class="form-control" name="manajer_id" id="manajer_id" value="{{ old('manajer_id', $data->manajer_id) }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection