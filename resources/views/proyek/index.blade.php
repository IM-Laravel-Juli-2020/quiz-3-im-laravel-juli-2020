@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Proyek Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <a class="btn btn-primary mb-2" href="/proyek/create">Create New Proyek</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Created At</th>
                        <th>Last Updated At</th>
                        <th>ID Manager</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($proyek as $key => $p)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->nama_proyek }}</td>
                        <td>{{ $p->deskripsi_proyek }}</td>
                        <td>{{ $p->tanggal_mulai }}</td>
                        <td>{{ $p->tanggal_deadline }}</td>
                        <td>{{ $p->id_manager }}</td>
                        <td style="display: flex">
                            <a href="/proyek/{{ $p->idProyek }}" class="btn btn-info btn-sm">Show</a>
                            <a href="/proyek/{{ $p->idProyek }}/edit" class="btn btn-default btn-sm">Edit</a>
                            <form action="/proyek/{{ $p->idProyek }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="!!DELETE!!" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" align="center"> No Posts</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

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
