@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="h3 mb-3 text-gray-800">
            List Data Proyek
        </h1>

        <div class="d-flex justify-content-end mb-3">
          <button class="btn btn-primary">
            Tambah Data
          </button>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Mulai</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                    <tr>
                      <td> {{ $project->name }} </td>
                      <td> {{ $project->description }} </td>
                      <td> {{ $project->start_date }} </td>
                      <td> {{ $project->deadline }} </td>
                      <td> {{ $project->status ? 'Aktif' : 'Selesai' }} </td>
                      <td>
                        <a href="" class="btn btn-xs btn-info">Edit</a>
                        <a href="" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection