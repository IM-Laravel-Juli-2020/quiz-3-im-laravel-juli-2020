@extends('layouts.master')
@section('isi')
<div class="container">
<h2>Ubah Proyek</h2>
  <form class="form-horizontal" action="{{ route('proyek.update', $proyek->id) }}" method="post">
  <!-- semua method post wajib ada csrf -->
  {!! csrf_field() !!}
  <!-- mengganti method post ke put -->
  {{ method_field('PUT') }}
    <div class="form-group">
            <label for="nama">Nama Proyek  : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $proyek->nama }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $proyek->deskripsi }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tglMulai">Tanggal Mulai : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="date" class="form-control" name="tglMulai" id="tglMulai" value="{{ $proyek->tanggalMulai }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tglSelesai">Tanggal Selesai : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="date" class="form-control" name="tglSelesai" id="tglSelesai" value="{{ $proyek->tanggalSelesai }}">
                </div>
            </div>
        </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('proyek.index') }}">Kembali</a>
      </div>
    </div>
  </form>
</div>
@endsection