@extends('layouts.master')

 @section('title')
  {{ "Menambahkan staff ke proyek $proyek->nama_proyek" }} 
 @endsection

@section('content')
<?php $id = 0; ?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $count=1; ?>
  @foreach($staff as $key => $value)  
  
    <tr>
      <th scope="row">{{ $count }}</th>
      <td>{{ $value->nama }}</td>
      <td>
        <form action="/proyek/{{ $value->id.'-'.$proyek->id }}/daftarkan-staff" method="POST">
            @csrf
            <button class="btn btn-outline-secondary" type="submit" >Tambahkan</button>
        </form>
      </td>
    </tr>
    <?php $count++; ?>
    @endforeach
  </tbody>
</table>




@endsection
