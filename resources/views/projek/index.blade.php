@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card card-header">
            <h3 class="card-title">List Projek</h3>
        </div>
        <div class="card card-body">
            
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Projek</th>
                    <th>Deskripsi</th>
                    <th>Deadline</th>
                    <th>Manager</th>
                    <th>Action</th>
                </tr>
                @foreach ($projek as $data)
    
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->deadline }}</td>
                        <td>{{ $data->manager_id }}</td>
                        <td>
                            <a href="{{ route('projek.create') }}" class="btn btn-primary" >Lihat</a>
                            <a href="" class="btn btn-primary" >Lihat</a>
                            <a href="" class="btn btn-primary" >Lihat</a>
                        </td>
                    </tr>
                    
                @endforeach
                    
            </table>


        </div>
    </div>

@endsection