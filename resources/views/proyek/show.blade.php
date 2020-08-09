@extends('layouts.master')

@section('content')
<div class="p-3">
    <h3>{{ $proyek->nama_proyek }}</h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $proyek->deskripsi_proyek }}</p>
        </div>
    </div>
</div>

@endsection
