@extends('layouts.master')

@section('content')
<div class="card">
<div class="card-body">
<a href="{{ url('proyek/create') }}" class="btn btn-primary mb-2">TAMBAH DATA</a>
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
      <th style="width: 40px">Action</th>
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
          <td style="display: flex;">
            <a href="{{url('proyek/'.$val->id)}}" class="btn btn-default btn-sm">show</a>
            <a href="{{url('proyek/'.$val->id).'/edit'}}" class="btn btn-warning btn-sm">edit</a>
            <form action="{{url('proyek/'.$val->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger btn-sm" value="delete">
            </form>
            
          </td>
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

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush

