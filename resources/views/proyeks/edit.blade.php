@extends('sbadmin2.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Create Proyek</h3>
            </div>
            <form role="form" action="/proyek/{{$proyek->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_proyek">Nama Proyek</label>
                        <input type="text" class="form-control" value="{{old('nama_proyek',$proyek->nama_proyek)}}" name="nama_proyek" id="nama_proyek" placeholder="Nama Proyek" required>
                    </div>
                    @error('nama_proyek')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="deskripsi_proyek">Deskripsi Proyek</label>
                        <input type="text" class="form-control" value="{{old('deskripsi_proyek',$proyek->deskripsi_proyek)}}" name="deskripsi_proyek" id="deskripsi_proyek" placeholder="Deskripsi Proyek" required>
                    </div>
                    @error('deskripsi_proyek')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="text" class="form-control" value="{{old('tanggal_mulai',$proyek->tanggal_mulai)}}" name="tanggal_mulai" id="tanggal_mulai" placeholder="Tanggal Mulai" required>
                    </div>
                    @error('tanggal_mulai')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="tanggal_deadline">Tanggal Deadline</label>
                        <input type="text" class="form-control" value="{{old('tanggal_deadline',$proyek->tanggal_deadline)}}" name="tanggal_deadline" id="tanggal_deadline" placeholder="Tanggal Deadline" required>
                    </div>
                    @error('tanggal_deadline')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="status">Status </label>
                        <select id="status" name="status" class="form-control">
                            <option value="">-- Pilih Status --</option>
                            @if ($proyek->status==1)
                            <option selected="selected" value="1" >True</option>
                            <option  value="0" >False</option>
                            @else
                            <option value="1" >True</option>
                            <option selected="selected" value="0" >False</option>
                            @endif
                          </select>
                    </div>
                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection