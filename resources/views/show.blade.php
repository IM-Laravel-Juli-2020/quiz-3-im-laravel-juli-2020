@extends('layouts.master')

@section('content')
<div class="my-2">
    <div class="card rounded py-3">
        <h2 class="text-center">Detail Proyek</h2>
        <p class="text-center">{{$item->nama_proyek}}</p>
        <hr>
        <table class="table table-hover">
            <tr>
                <td>Deskripsi Proyek</td>
                <td>Tanggal Dimulai</td>
                <td>Tanggal Deadline</td>
            </tr>
            <tr>
                <td>{{$item->deskripsi_proyek}}</td>
                <td>{{$item->tanggal_dimulai}}</td>
                <td>{{$item->tanggal_deadline}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection