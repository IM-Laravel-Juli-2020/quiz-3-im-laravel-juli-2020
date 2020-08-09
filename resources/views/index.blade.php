@extends('layouts.master')

@section('content')
    <div class="my-2">
        <div class="card rounded py-3">
            <h2 class="text-center">Daftar Proyek</h2>
            <hr>
            <div class="row justify-content-end">
                <a href="{{route('proyek.create')}}" class="btn btn-md btn-primary mx-4 mb-3"><i class="fa fa-plus"></i> Tambah Proyek</a>
            </div>
            <table class="table table-hover">
                <tr>
                    <td>Nama Proyek</td>
                    <td>Deskripsi Proyek</td>
                    <td>Tanggal Dimulai</td>
                    <td>Tanggal Deadline</td>
                    <td>Action</td>
                </tr>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->nama_proyek}}</td>
                        <td>{{$item->deskripsi_proyek}}</td>
                        <td>{{$item->tanggal_dimulai}}</td>
                        <td>{{$item->tanggal_deadline}}</td>
                        <td>
                            <a href="{{route('proyek.show', $item->id)}}" class="btn btn-sm btn-warning">Details</a>
                            <a href="{{route('proyek.edit', $item->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{route('proyek.destroy', $item->id)}}" method="post" class="d-inline ml-3">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection