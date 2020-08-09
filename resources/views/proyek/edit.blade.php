@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Proyek {{ $proyek->idProyek }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/proyek/{{ $proyek->idProyek }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama"> Nama Proyek </label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $proyek->nama_proyek) }}" placeholder="Enter Nama Proyek">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi"> deskripsi </label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $proyek->deskripsi_proyek) }}"  placeholder="Enter deskripsi">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deadline"> Tanggal Deadline </label>
                    <input type="date" class="form-control" id="deadline" name="deadline" value="{{ old('deadline', $proyek->tanggal_deadline) }}"  placeholder="Enter deadline">
                    @error('deadline')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_manager"> Masukkan id_manager </label>
                    <input type="number" class="form-control" id="id_manager" name="id_manager" value="{{ old('id_manager', $proyek->id_manager) }}"  placeholder="Enter id_manager">
                    @error('id_manager')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection
