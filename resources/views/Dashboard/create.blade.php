@extends('layouts.master')

@section('konten')
    <div class="container">
        <div class="card">
            <div class="card-header">Tambah Data</div>
            <div class="card-body">
            <form action="{{route('proyek.store')}}">
            @csrf 
            <input type="text" name="Nama" placeholder="Nama proyek"><br><br>
            <input type="Deskripsi_proyek" placeholder="Deskripsi proyek">Tanggal Mulai<br><br>
            <input type="date" name="tanggal_mulai" placeholder="Tanggal Mulai">Tanggal Deadline<br><br>
            <input type="date" name="tanggal_deadline" placeholder="Tanggal Deadline"><br><br>
            <select name="status" id="">
                <option value="true">Selesai</option>
                <option value="false">belum</option>
            </select>
            <button class="btn btn-primary"></button>
            </form>
            </div>
        </div>
    </div>
@endsection