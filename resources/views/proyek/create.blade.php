@extends('layouts.master')
@section('isi')
<div class="container">
    <h3>Input Proyek</h3>
    <form class="mt-2" action='{{url("proyek")}}' method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nama">Nama Proyek : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tglMulai">Tanggal Mulai : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="date" class="form-control" name="tglMulai" id="tglMulai">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tglSelesai">Tanggal Selesai : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="date" class="form-control" name="tglSelesai" id="tglSelesai">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="manager">Manager : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="manager" id="manager">
                </div>
            </div>
        </div>
        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ route('proyek.index') }}">Kembali</a>
        </div>
        </div>
    </form>
</div>
@endsection