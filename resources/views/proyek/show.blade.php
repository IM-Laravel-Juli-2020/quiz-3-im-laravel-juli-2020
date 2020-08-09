@extends('layouts.master')
@section('content')
<div class="card-body">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Deadline</th>
            <th>Status</th>
            <th>Manager</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($proyek as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->deskripsi}}</td>
            <td>{{$value->tanggal_mulai}}</td>
            <td>{{$value->tanggal_deadline}}</td>
            <td>{{$value->status}}</td>
            <td>{{$value->manager_id}}</td>
            <td>#</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection