@extends('layout.main')

@section('container')
    <form action="/Siswa" method="POST" autocomplete="off">
      @csrf
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nis">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_siswa">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected>-Pilih-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            <option value="3">Gay</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select" name="kelas_id" aria-label="Default select example">
            <option selected>Pilih Kelas</option>
            @foreach ($ruangkelas as $kelas)
              <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tgl_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" style="height: 50px" name="alamat"></textarea>
        </div>
       
        
        <div class="row my-3">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
      </div>

     

  </form>
@endsection
