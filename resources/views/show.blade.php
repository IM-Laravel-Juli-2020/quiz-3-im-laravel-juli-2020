@extends('layouts.master')

@section('content')

<div class="card mx-2 my-3">
	<div class="card-body">
		<table class="table table-borderless">
			<tr>
				<th>Nama</th>
				<td>{{ $query->nama }}</td>
			</tr>
			<tr>
				<th>Deskripsi</th>
				<td>{{ $query->deskripsi }}</td>
			</tr>
			<tr>
				<th>Tanggal Mulai</th>
				<td>{{ $query->tanggal_mulai }}</td>
			</tr>
			<tr>
				<th>Tanggal Deadline</th>
				<td>{{ $query->tanggal_deadline }}</td>
			</tr>
			<tr>
				<th>Status</th>
				<td>
					@if($query->status == 0)
					false
					@endif
					@if($query->status == 1)
					true
					@endif
				</td>
			</tr>
		</table>
	</div>
	<div class="card-footer">
		<a href="/proyek" class="btn btn-secondary float-right">Back</a>
	</div>
	
</div>

@endsection