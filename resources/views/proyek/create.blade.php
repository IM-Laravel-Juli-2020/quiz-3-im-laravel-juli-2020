@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Proyek</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buat Proyek</li>
            </ol>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Proyek</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama','') }}" placeholder="nama proyek">
                    @error('nama')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="isi">Deskripi</label>
                    <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="deskripsi proyek">{{ old('isi','') }}</textarea>
                    @error('isi')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                    <label for="mulai">Tanggal Mulai:</label>
                    <input type="date" id="mulai" name="mulai">
                    @error('mulai')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                    <label for="deadline">Tanggal Deadline:</label>
                    <input type="date" id="deadline" name="deadline">
                    @error('deadline')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="1" selected>Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="manager">Manager</label>
                <select name="manager" id="manager">
                    @foreach($manager as $key => $value)
                        <option value="{{$value->id_karyawan}}">{{$value->nama_lengkap}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
@endsection