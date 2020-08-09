@extends('layouts.master') 

@section('content')
        <div class="ml-3 mt-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar Proyek</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action='/proyek' method='POST' >
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Judul</label>
                    <input type="text" class="form-control" id="nama" name="nama" value ="{{old('nama','')}}" placeholder="masukkan nama proyek">
                    @error('nama')
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
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
            
@endsection