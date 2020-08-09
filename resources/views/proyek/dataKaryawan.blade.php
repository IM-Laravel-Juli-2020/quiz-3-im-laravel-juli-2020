@extends('layouts.master')
@section('isi')
<div class="container">
  @foreach($errors->all() as $error)      
    <h4>{{$error}}</h4>
  @endforeach
  @if (session('status'))
    <div>{{session('status')}}</div>
  @endif
    <h3>Data Karyawan</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Karyawan</th>
            <th scope="col">Jabatan</th>
        </tr>
        </thead>
        <tbody>
        @foreach($karyawan as $idx => $k)
        <tr>
            <td><a href="{{ route('karyawan.show', $k->id) }}">{{$idx+1}}</a></td>
            <td><a href="{{ route('karyawan.show', $k->id) }}">{{$k->nama}}</a></td>
            <td><a href="{{ route('karyawan.show', $k->id) }}">{{$k->jabatan_id}}</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection