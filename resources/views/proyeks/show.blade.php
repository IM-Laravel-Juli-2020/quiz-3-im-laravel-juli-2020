@extends('sbadmin2.master')

@section('content')
    <div class="mt-3 ml-3">
        <h2>Nama Proye : {{ $proyek->nama_proyek}}</h2>
        <h2>Deskripsi : {{ $proyek->deskripsi_proyek}}</h2>
        <h2>Tgl Mulai : {{ date('d-m-Y', strtotime($proyek->tanggal_mulai))}}</h2>
        <h2>Tgl Deadline : {{ date('d-m-Y', strtotime($proyek->tanggal_deadline))}}</h2>
        <h2>Status : {{ $proyek->status==1 ? 'True' : 'False' }}</h2>
    </div>
@endsection