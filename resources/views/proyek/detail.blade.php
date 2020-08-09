@extends('layouts.master')
@section('isi')
<div class="container">
    <label>Nama Proyek : {{$proyek->nama}}</label><br>
    <label>Deskripsi : {{$proyek->deskripsi}}</label><br>
    <label>Tanggal Mulai : {{$proyek->tanggalMulai}}</label><br>
    <label>Tanggal Selesai : {{$proyek->tanggalSelesai}}</label><br>
    <label>Manager : {{$proyek->deksripsi}}</label><br>
    <label>Staff : {{$proyek->deksripsi}}</label><br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a class="btn btn-primary" href="{{ route('proyek.index') }}">Kembali</a>
      </div>
    </div>
</div>
@endsection