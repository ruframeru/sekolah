@extends('layout.main')

@section('container')
<form action="/Guru" method="POST" autocomplete="off">
    @csrf
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Nama Guru</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_guru">
        </div>
</div>
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select class="form-select" name="jenkel_guru" aria-label="Default select example">
        <option selected>-Pilih-</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
<div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="no_tlp_guru">
        </div>
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
