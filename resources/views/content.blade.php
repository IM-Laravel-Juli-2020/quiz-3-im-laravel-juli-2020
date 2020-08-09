@extends('master')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Proyek</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach($data as $details)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $details->nama_proyek }}</td>
                    <td>{{ $details->deskripsi_proyek }}</td>
                    <td>{{ $details->status }}</td>
                    <!-- <td>07-08-2020</td>
                    <td>07-08-2020</td> -->
                    <td>
                        <a href="/proyek/{{$details->id}}/daftarkan" class="badge badge-success">Daftar</a>
                        <a href="/proyek/{{$details->id}}/edit" class="badge badge-primary">Edit</a>
                        <form action="/proyek" method="POST">
                        @csrf
                        @method('DELETE')   
                            <input style="margin-left:10px;" type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>           
                </tr>
            @endforeach
    </tbody>
</table>

@endsection
@push('script')
<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush