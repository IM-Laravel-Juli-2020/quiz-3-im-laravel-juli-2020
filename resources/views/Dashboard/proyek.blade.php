@extends('layouts.master')
@section('konten')
    <div class="container p-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA PROYEK</th>
                    <th> INFO </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyek as $p)
                    
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->Nama}} </td>
                    <td>
                    <a href="{{route('proyek.show',$p->id)}}" class="btn btn-info">
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection