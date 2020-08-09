@extends('layouts.master')
@section('isi')
<div class="container">
    <h3>Input Proyek</h3>
    <form class="mt-2" action='{{url("proyek")}}' method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nama">Nama Staff : </label>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nama" id="nama">
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