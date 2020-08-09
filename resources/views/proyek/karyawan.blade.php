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
      <th>karyawan</th>
      <th>jabatan</th>
      <th style="width: 40px">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($list as $key => $val)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{ $val->name}}</td>
          <td>{{ $val->jabatan}}</td>
          <td style="display: flex;">
            <a href="{{url('karyawan/'.$val->id.'/daftar-proyek')}}" class="btn btn-success btn-sm">show</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">Data kosong</td>
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

