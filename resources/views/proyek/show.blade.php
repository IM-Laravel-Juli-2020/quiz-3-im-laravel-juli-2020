@extends('layouts.master')
@section('title', 'Detail Proyek')
    
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Detail Proyek</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Nama Proyek: {{ $detail->nama_proyek }}</li>
                        <li>Tanggal Mulai: {{ $detail->tanggal_mulai }}</li>
                        <li>Tanggal Deadline: {{ $detail->tanggal_deadline }}</li>
                        <li>Status: @if ($detail->status == false)
                            Belum Selesai
                        @else
                           Selesai 
                        @endif</li>
                        <li>Manajer ID: {{ $detail->manajer_id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection