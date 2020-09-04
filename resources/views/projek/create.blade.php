@extends('layouts.master')

@section('content')
    
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h3>Buat Projek</h3>
            </div>
            <div class="card-body">
            
                <form action="{{ route('projek.store') }}" method="POST">
    
                    @csrf

                    <div class="form-group">
                        <strong>Judul Projek :</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Judul Projek">
                    </div>

                    <div class="form-group">
                        <strong class="align-self-center">Deskripsi :</strong>
                        <textarea name="deskripsi" cols="100" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <strong>Tanggal Mulai :</strong>
                        <input type="date" name="mulai" class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Tanggal Berakhir / Deadline :</strong>
                        <input type="date" name="deadline" class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Status Kerja / Projek :</strong> <br>
                        <input type="radio" name="staus" value="true">
                        <label>Sudah</label>
                        <input type="radio" name="staus" value="0">
                        <label>Dalam Proses</label>
                    </div>

                    <div class="form-group">
                        <strong>Manager :</strong>
                        <input type="number" name="manager_id" class="form-control" placeholder="manager">
                    </div>
                    
                    <input type="submit" value="submit" class="btn btn-success">
                </form>

            </div>
        </div>

    </div>

@endsection