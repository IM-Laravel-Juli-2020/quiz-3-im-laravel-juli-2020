@extends('layouts.master')
@section('title', 'Tambah Proyek')
    
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Proyek</h5>
            </div>
            <div class="card-body">
                <form action="/proyek" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_proyek">Nama Proyek</label>
                    <input type="text" class="form-control @error('nama_proyek') is-invalid @enderror" name="nama_proyek" id="nama_proyek">
                    @error('nama_proyek')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai">
                </div>
                <div class="form-group">
                    <label for="tanggal_deadline">Tanggal Deadline</label>
                    <input type="date" class="form-control" name="tanggal_deadline" id="tanggal_deadline">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="custom-select">
                        <option value="0">Belum Selesai</option>
                        <option value="1">Selesai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="manajer_id">Manajer</label>
                    <select name="manajer_id" id="manajer_id" class="custom-select">
                        @foreach ($manajer as $m)
                            <option value="{{ $m->id }}">{{ $m->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection