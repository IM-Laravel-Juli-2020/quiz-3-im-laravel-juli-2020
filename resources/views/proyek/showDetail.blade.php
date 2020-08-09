@extends('layouts.master')

@section('content')
<div class="p-3">
    <h3>{{ $kar->nama }}</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Proyek</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($proyek as $key => $p)
                    <tr>
                        <td>{{ $p->nama_proyek }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="1" align="center"> No Posts</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
