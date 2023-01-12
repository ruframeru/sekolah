@extends('layout.main')

@section('container')
    <form action="/Siswa/{{$siswa->id}}/edit" method="POST">
        @csrf
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{$siswa->nis}}" name="nis">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  value="{{$siswa->nama_siswa}}" name="nama_siswa">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
            <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            <option value="3">Gay</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">No Telpon</label>
        <div class="col-sm-10">
          <input type="telp" class="form-control" value="{{$siswa->no_tlp_siswa}}" name="no_tlp_siswa">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" value="{{$siswa->tgl_lahir}}" name="tgl_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" style="height: 50px" value="" name="alamat">{{$siswa->alamat}}</textarea>
        </div>
      <div class="row my-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </div>
  </form>
@endsection
