@extends('layouts.master')

@section('page-title')
    Create Proyek
@endsection

@section('content')
<form class="form" method="POST" action="/items">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Project Name...">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter Project Description">
    </div>
    <div class="form-group">
        <input type="date" class="form-control" id="start" name="start" placeholder="Enter Project Date Start">
    </div>
    <div class="form-group">
        <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Enter Project Deadline">
    </div>
    <div class="form-group">
        <input type="radio" id="status" name="status" value="1"> On Progress
        <input type="radio" id="status" name="status" value="0"> Ended
    </div>
    <div class="form-group">
        <select name="manager" id="manager" class="form-control">
            @foreach ($manager as $data)
                <option value="{{ $data->manager_id }}">{{ $data->manager_id }} - {{ $data->manager_name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" class="btn btn-primary btn-user btn-block" value="Create">
    </form>
@endsection