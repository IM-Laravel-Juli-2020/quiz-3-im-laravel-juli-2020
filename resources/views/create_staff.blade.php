@extends('template')

@section('styles')
<style>
    form div{
        display: flex;
        padding: 20px;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    form div label{
        flex: 300px 0 0;
    }
    form div input{
        flex: 200px 1 1;
        padding: 20px;
        font-size: 16px;
    }
    button{
        padding: 10px;
        width: 100%;
        flex: 200px 1 1;
    }
    span{
        color: red;
    }
</style>
@endsection

@section('content')
<h2>Membuat pertanyaan</h2>
<form action="/proyek/{{$data->id}}/daftarkan-staff" method="POST">
    @csrf
    <h3>Nama proyek: {{ $data->nama }}</h3>
    <div>
        <label for="id">id: @error('id') <span >{{ $message }}</span> @enderror </label>
        <input type="text" value="{{old('id', '')}}" name="title" id="title" placeholder="Masukkan ID staff Anda" maxlength="255">
    </div>
    <button type="submit">Input!</button>
</form>
@endsection

@push('scripts')
<script>
</script>