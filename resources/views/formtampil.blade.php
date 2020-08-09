@extends('master')

@section('content')
    <h4 style="margin-left:10px;">Form Buat Proyek</h4>

    <form action="/proyek/{{$data->id}}" method="post">
    @csrf
    @method('PUT')
        <input style="margin:15px 10px; width:250px; " type="text" name="nama" placeholder="Nama Proyek" value="{{old('nama' , $data->nama_proyek)}}"><br>
        <textarea style="margin-left:10px;" name="deskripsi" id=""placeholder="Deskripsi">{{old('deskripsi' , $data->deskripsi_proyek)}}</textarea><br>
        <input style="margin:15px 10px; width:200px; " type="text" name="status" placeholder="Status Proyek" value="{{old('status' , $data->status)}}"><br>
        <button style="margin-left:10px;" type="submit" class="btn btn-dark">Buat</button>
    </form>
@endsection