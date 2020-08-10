@extends('layouts.master')

@section('content')

<div class="mt-3 ml-3">
  
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Proyek</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                {{session('success')}}
            </div>
            @endif
            <a href="/pertanyaan/create" class="btn btn-primary btn-sm mb-3">Tambahkan Proyek Baru</a>
          <table class="table table-bordered table-hover">
            <thead>                  
              <tr>
                <th style="width: 10px">#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Deadline</th>
                <th>Status</th>
                <th>ID Manager</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @forelse($proyek as $p)
              <tr>
              <td>{{$nomor++}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->deskripsi}}</td>
                <td>{{$p->tanggal_mulai}}</td>
                <td>{{$p->tanggal_deadline}}</td>
                <td>{{$p->status}}</td>
                <td>{{$p->id_manager}}</td>
                <td style="display: flex" class=" justify-content-between">
                    <a href="/proyek/{{$p->id}}" class="btn btn-info btn-md">Daftarkan Staff</a>
                    <a href="/proyek/{{$p->id}}/edit" class="btn btn-warning btn-md">Edit</a>
                <form action="/proyek/{{$p->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                </form>
                </td>
                @empty
                <td colspan="4">EMPTY</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>

@endsection