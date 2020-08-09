@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Proyek</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          @if (session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
          @endif
          <a class="btn btn-primary mb-2" href="/posts/create">create new proyek</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>judul</th>
                <th>isi</th>
                <th style="width: 40px">action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($proyeks as $key => $proyek)
                  <tr>
                      <td> {{$key+1}} </td>
                      <td> {{$proyek->judul}} </td>
                      <td> {{$proyek->isi}} </td>
                      <td style="display: flex">
                          <a href="/posts/{{$proyek->id}}" class="btn btn-info btn-sm">show</a>
                          <a href="/posts/{{$proyek->id}}/edit" class="btn btn-default btn-sm">edit</a>
                          <form action="/posts/{{$proyek->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
                  @empty
                  <p>no post</p>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
</div>

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
@endsection
