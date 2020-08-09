@extends('layouts.master') 

@section('content')
    <div class='mt-4 ml-4'>
        <h3> {{ $list->nama }}</h3>
        <p> {{ $list->deskripsi }} </p>
    </div>
@endsection