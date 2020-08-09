@extends('layouts/master')
@section('content')
<div class="card-header">
                <h3 class="card-title">Tabel Karyawan</h3>
              </div>
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>judul</th>
        <th>isi</th>
        <th>slug</th>
        <th>tag</th>
        <th>action</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach($items as $key=>$item)
     <tr>
     <td>{{$item->id}}</td>
     <td>{{$item->judul}}</td>
     <td>{{$item->isi}}</td>
     <td>{{$item->slug}}</td>
     <td>{{$item->tag}}</td>    
     <td>
     <a href="/karyawan/{{$item->id}}"class="btn btn-sm btn-info">show</a>
     <a href="/karyawan/{{$item->id}}/edit"class="btn btn-sm btn-info">edit</a>
     <form action="/karyawan/{{$item->id}}" method="post" style="display:inline">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
     </td> 
     </tr>
   @endforeach
    </tbody>
  </table>
  @endsection
  @push('scripts')
    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush