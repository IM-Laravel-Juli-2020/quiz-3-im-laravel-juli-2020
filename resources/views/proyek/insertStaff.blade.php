@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftarkan Staff</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/proyek/{{ $proyek->idProyek }}/daftarkan-staff" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="idProyek"> Id Proyek </label>
                    <input type="text" class="form-control" id="idProyek" name="idProyek" value="{{ old('idProyek', $proyek->idProyek) }}" placeholder="Enter idProyek Proyek">
                    @error('idProyek')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="idKaryawan"> Id Karyawan </label>
                    <input type="text" class="form-control" id="idKaryawan" name="idKaryawan" value="{{ old('idKaryawan', '') }}"  placeholder="Enter idKaryawan">
                    @error('idKaryawan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
