@extends('layouts.master')

@section('content')

<div class="card mx-2 my-3">
	<div class="card-body">
		@if(session('success'))

		<div class="alert alert-success">
			{{ session('success') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

		@endif
		<div class="form-group">
			<a href="/proyek/create" class="btn btn-primary btn-sm">Tambah Data</a>
		</div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Deadline</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse($proyek as $key => $value)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $value->nama }}</td>
					<td>{{ $value->deskripsi }}</td>
					<td>{{ $value->tanggal_mulai }}</td>
					<td>{{ $value->tanggal_deadline }}</td>
					<td>
						@if($value->status == 0)
						false
						@endif
						@if($value->status == 1)
						true
						@endif
					</td>
					<td style="display: flex;">
						<a href="/proyek/{{ $value->id }}" class="btn btn-info btn-sm mx-1">view</a>
						<a href="/proyek/{{ $value->id }}/edit" class="btn btn-light btn-sm mx-1">edit</a>
						<form action="/proyek/{{ $value->id }}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" value="delete" class="btn btn-danger btn-sm mx-1">
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="7" class="text-center">No Data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('sbadmin2/js/swal.min.js') }}"></script>

<script>
	Swal.fire({
		title: 'Berhasil!',
		text: 'Memasangkan script sweet alert',
		icon: 'success',
		confirmButtonText: 'Cool'
	})
</script>

@endpush