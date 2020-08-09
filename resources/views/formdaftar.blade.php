@extends('master')

@section('content')
    <h4 style="margin-left:10px;">Form Daftar Karyawan</h4>

    <form action="/proyek" method="post">
    @csrf
        <input style="margin:15px 10px; width:250px; " type="text" name="karyawan" placeholder="Nama Karyawan"><br>
        <button style="margin-left:10px;" type="submit" class="btn btn-dark">Daftarkan</button>
    </form>
@endsection