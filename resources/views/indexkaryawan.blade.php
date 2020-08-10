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
					<th>Jabatan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse($karyawan as $key => $value)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $value->nama }}</td>
					<td>{{ $value->jabatan }}</td>
					<td style="display: flex;">
						<a href="/karyawan/{{ $value->id }}/daftar-proyek" class="btn btn-primary btn-sm mx-1">Daftar Proyek</a>
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