@extends('layouts.master')
@section('title', 'Daftar Proyek')
    
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Proyek</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Proyek</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Deadline</th>
                                <th>Status</th>
                                <th>Manajer ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($proyek as $p)
                            <tr>
                                <th>#</th>
                                <th>{{ $p->nama_proyek }}</th>
                                <th>{{ $p->tanggal_mulai }}</th>
                                <th>{{ $p->tanggal_deadline }}</th>
                                <th>
                                    @if ($p->status == false)
                                    Belum Selesai
                                    @else
                                    Selesai
                                    @endif
                            </th>
                                <th>{{ $p->manajer_id }}</th>
                                <th>
                                    <a href="/proyek/{{ $p->id }}">Detail</a>
                                    &NonBreakingSpace;
                                    <a href="/proyek/{{ $p->id }}/edit">Edit</a>
                                    <form action="/proyek/{{ $p->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </th>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
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