@extends('layout.main')

@section('container')
<form action="/Guru/{{$guru->id}}/edit" method="POST">
    @csrf
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Nama Guru</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $guru->nama_guru }}" name="nama_guru" >
        </div>
</div>
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select class="form-select" name="jenkel_guru" aria-label="Default select example">
        <option selected>-Pilih-</option>
        <option value="Laki-Laki" @if($guru->jenkel_guru == "Laki-Laki") selected @endif>Laki-Laki</option>
        <option value="Perempuan" @if($guru->jenkel_guru == "Perempuan") selected @endif>Perempuan</option>
      </select>
    </div>
  </div>
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $guru->no_tlp_guru }}" name="no_tlp_guru" >
        </div>
</div>
<button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection
