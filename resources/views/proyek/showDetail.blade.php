@extends('layouts.master')

@section('content')
<div class="p-3">
    <h3>{{ $kar->nama }}</h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $kar->id_manager }}</p>
        </div>
    </div>
</div>

@endsection
