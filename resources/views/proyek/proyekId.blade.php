@extends('layouts.master')

@section('content')
<div class="card">
<div class="card-body">
<a href="{{ url('proyek') }}" class="btn btn-primary mb-2">Kembali</a>
@if(session('success'))
<div class="alert alert-success">{{ session("success") }}</div>
@endif
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">No.</th>
      <th>Nama Proyek</th>
      <th>Deskripsi</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Deadline</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($list as $key => $val)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{ $val->nama_proyek}}</td>
          <td>{{ $val->deskripsi}}</td>
          <td>{{ $val->tanggal_mulai}}</td>
          <td>{{ $val->tanggal_deadline}}</td>
          
        </tr>
      @empty
        <tr>
          <td colspan="3">Data kosong</td>
        </tr>
      @endforelse  
  </tbody>
</table>
</div>
</div>
@endsection

@push('script')

@endpush

