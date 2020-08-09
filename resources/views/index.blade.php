<<<<<<< HEAD
@extends('layouts.master')
@section('content')
<img src="{{asset('/image/Diagram (1).png')}}" alt="ERD">
=======
@extends('template')

@section('styles')

<style>
    form{
        display: inline;
    }
</style>

@endsection

@section('content')
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>deskipsi</th>
            <th>action</th>
        </tr>
        @foreach($datas as $no => $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->deskripsi }}</td>
            <td>
                <a href="/proyek/{{ $data->id }}/daftarkan-staff"><button>Daftarkan staff</button></a>
                <a href="/proyek/{{ $data->id }}/edit"><button>Edit proyek</button></a>
                <a href="">
                <form action="/proyek/{{ $data->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete proyek</button>
                </form></a>
            </td> 
        </tr>
        @endforeach
    </table>
>>>>>>> 01d1b94bfba476af1255874a7c0442223a3eab5f
@endsection