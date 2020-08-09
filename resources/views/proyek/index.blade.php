@extends('layouts.master')
@section('isi')
<div class="container">
  @foreach($errors->all() as $error)      
    <h4>{{$error}}</h4>
  @endforeach
  @if (session('status'))
    <div>{{session('status')}}</div>
  @endif
    <h3>Data Proyek</h3>
    <a class="btn btn-info" href="{{ url('proyek/create') }}">Tambah Baru</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Proyek</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proyek as $idx => $p)
        <tr>
            <td><a href="{{ route('proyek.show', $p->id) }}">{{$idx+1}}</a></td>
            <td><a href="{{ route('proyek.show', $p->id) }}">{{$p->nama}}</a></td>
            <td><a href="{{ route('proyek.show', $p->id) }}">{{$p->deskripsi}}</a></td>
            <td><a href="{{ route('proyek.show', $p->id) }}">{{$p->tanggalMulai}}</a></td>
            <td><a href="{{ route('proyek.show', $p->id) }}">{{$p->tanggalSelesai}}</a></td>
            <td>
            <a class="btn btn-warning" href="{{ route('proyek.edit', $p->id) }}">Edit</a>
            <form action="{{ route('proyek.destroy', $p->id) }}" method="POST" id="form-hapus-{{ $p->id }}">
                {{ method_field("DELETE") }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@push('scripts')
<script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
@endsection