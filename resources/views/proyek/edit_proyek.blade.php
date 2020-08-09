@extends('layouts.master')

@section('content')
<div class="card">
	<div class="card-header">
  <h3 class="card-title">Input Proyek</h3>
</div>
<div class="card-body">
<a href="{{ url('proyek') }}" class="btn btn-default mb-2">Kembali</a>
<hr>
@if(session('success'))
<div class="alert alert-success">{{ session("success") }}</div>
@endif
<form action="{{url('proyek')}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="judul">Nama Proyek</label>
    <input type="text" class="form-control" name="nama_proyek" aria-describedby="nama_proyekHelp" value="{{old('nama_proyek',$post->nama_proyek)}}">
    @error('nama_proyek')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="" rows="4">{{old('deskripsi',$post->deskripsi)}}</textarea>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Mulai</label>
    <input type="date" class="form-control" name="tglm" aria-describedby="judulHelp" value="{{old('tglm',$post->tanggal_mulai)}}">
    @error('tglm')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Deadline</label>
    <input type="date" class="form-control" name="tgld" aria-describedby="judulHelp" value="{{old('tgld',$post->tanggal_deadline)}}">
    @error('tgld')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection

@push('script')

@endpush

