@extends('layouts.master')

@section('content')

<div class="card mx-2 my-3">
	<form role="form" action="/proyek/{{ $query->id }}" method="post">
		@csrf
		@method('PUT')
		<div class="card-body">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="{{ old('nama', $query->nama) }}">
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi</label>
				<input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi" value="{{ old('deskripsi', $query->deskripsi) }}">
			</div>
			<div class="form-group">
				<label for="mulai">Tanggal Mulai</label>
				<input type="date" name="mulai" class="form-control" id="mulai" placeholder="mulai" value="{{ old('mulai', $query->tanggal_mulai) }}">
			</div>
			<div class="form-group">
				<label for="deadline">Tanggal Deadline</label>
				<input type="date" name="deadline" class="form-control" id="deadline" placeholder="deadline" value="{{ old('deskripsi', $query->tanggal_deadline) }}">
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="/proyek" class="btn btn-secondary float-right">Back</a>
		</div>
	</form>
</div>

@endsection