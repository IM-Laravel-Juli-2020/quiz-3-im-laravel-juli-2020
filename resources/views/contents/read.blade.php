@extends('layouts.master')

@section('page-title')
    List Proyek
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Proyek</th>
              <th>Deskripsi Proyek</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Deadline</th>
              <th>Status</th>
              <th>Manager ID</th>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
              @forelse ($proyeks as $data)
                  <tr>
                      <td>{{$data->nama_proyek}}</td>
                      <td>{{$data->deskripsi_proyek}}</td>
                      <td>{{$data->tanggal_mulai}}</td>
                      <td>{{$data->tanggal_deadline}}</td>
                      <td>{{$data->status}}</td>
                      <td>{{$data->manager_id}}</td>
                      <td class="d-flex">
                      <a href="items/{{$data->proyek_id}}" class="btn btn-info btn-sm" title="Show Detail">Show</a>
                        <a href="#" class="btn btn-primary btn-sm" title="Edit Data">Edit</a>
                        <form action="items/{{$data->proyek_id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit" title="Delete Data">
                            Delete
                          </button>
                        </form>
                    </td>
                  </tr>
              @empty
                  <td colspan="7" align="center">No Data</td>
              @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection