@extends('layouts.master')

@section('content')
<div class="card">
<div class="card-body">
@if(session('success'))
<div class="alert alert-success">{{ session("success") }}</div>
@endif
<ul class="list-group">
  
</ul>
@forelse ($list as $key => $val)
<li class="list-group-item">{{$key+1}}. {{$val->nama_proyek}}</li>
@empty
<li class="list-group-item">KOSONG</li>
@endforelse  

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

