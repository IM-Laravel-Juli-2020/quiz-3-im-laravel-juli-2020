@extends('layouts.master')

@section('content')

<div class="card mx-2 my-3">
	<div class="card-body">
		<ul class="nav-item">
			@forelse($query1 as $key => $value)
		    <li>{{ $value->proyek_id }}</li>
		    @empty
		    <li>No data</li>
		    @endforelse
		</ul>
	</div>
	<div class="card-footer">
		<a href="/proyek" class="btn btn-secondary float-right">Back</a>
	</div>
	
</div>

@endsection