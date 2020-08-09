@extends('layouts.master')

@section('page-title')
  Detail Proyek
@endsection

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ $proyek->nama_proyek }}</h3>
      </div>
      <div class="card-body">
        <h5>Deskripsi : {{ $proyek->deskripsi_proyek }}</h5>
        <h5>Tanggal mulai : {{ $proyek->tanggal_mulai }}</h5>
        <h5>Deadline : {{ $proyek->tanggal_deadline }}</h5>
        <h5>Status : {{ $proyek->status }}</h5>
        <h5>Manager ID : {{ $proyek->manager_id }}</h5>
      </div>
    </div>
  </div>
@endsection