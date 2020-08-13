@extends('layouts.master')

@section('title','Data Proyek')

@section('content')

@parent
<div class="mt-2">
        <a href="/pertanyaan/create" type="button" class="btn btn-primary btn-sm">Buat pertanyaan baru</a>
    </div>    
    @if(session('berhasil'))
    <div class="alert alert-success mt-2">
        {{session('berhasil')}}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Proyek</th>
            <th scope="col">deskripsi</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Berakhir</th>
            <th scope="col">id_manager</th>
            </tr>
        </thead>
        <tbody>
    @forelse($data as $key => $d)     
            <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{$d->nama_proyek}}</td>
            <td>{{$d->deskripsi}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
            <td>{{$d->manager_id}}</td>
            </tr>
    @empty
    <tr>
            <th scope="row">{
                <td>
                    Belum Ada Proyek
                </td>
            </th>
    </tr>
    @endforelse
    </tbody>
    </table>

    

@endsection
