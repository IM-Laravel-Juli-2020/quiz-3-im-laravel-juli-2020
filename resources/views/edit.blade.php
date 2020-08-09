@extends('layouts.master')

@section('content')
<div class="my-2">
    <div class="card rounded py-3">
        <h2 class="text-center">Edit Proyek</h2>
        <p class="text-center">{{$item->nama_proyek}}</p>
        <hr>
        <form action="{{route('proyek.update', $item->id)}}" method="post" class="form-group px-3">
            @csrf
            @method('PUT')
            <label for="" class="mb-0 mt-3">Nama Proyek</label>
            <input type="text" name="nama_proyek" class="form-control" value="{{$item->nama_proyek}}">
            <label for="" class="mb-0 mt-3">Deskripsi Proyek</label>
            <textarea name="deskripsi_proyek" id="" cols="30" rows="5" class="form-control">{{$item->deskripsi_proyek}}</textarea>
            <label for="" class="mb-0 mt-3">Tanggal Dimulai</label>
            <input type="date" name="tanggal_dimulai" class="form-control" value="{{$item->tanggal_dimulai}}">
            <label for="" class="mb-0 mt-3">Tanggal Deadline</label>
            <input type="date" name="tanggal_deadline" class="form-control" value="{{$item->tanggal_deadline}}">
            <button class="btn btn-md btn-primary float-right mt-3" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection