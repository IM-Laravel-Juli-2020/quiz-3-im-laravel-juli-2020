@extends('layouts.master') 

@section('content')
        <div class="ml-3 mt-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Proyek : {{ $list->id}} </h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action='/proyek/{{$list->id}}' method='POST' >
                  @csrf
                  @method('PUT')

                <div class="card-body">
                  <div class="form-group">
                    <label for="namal">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama" name="nama" value ="{{old('nama',$list->nama)}}" placeholder="masukkan nama proyek">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value ="{{old('deskripsi','')}}" placeholder="masukkan deksripsi">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                    <label for="">Manajer</label>
                    <input type="text" class="form-control" id="manajer_id" name="manajer_id" value ="{{old('manajer_id','')}}" placeholder="masukkan manajer">
                    @error('manajer_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                  </div>               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
            
@endsection