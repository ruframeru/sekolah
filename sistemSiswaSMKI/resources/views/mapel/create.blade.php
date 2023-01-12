@extends('layout.main')

@section('container')
    <form action="/Mapel" method="POST" autocomplete="off">
      @csrf
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="kode_mapel">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Mata Pelajaran</label>
        <div class="col-sm-10">
           <input type="text" class="form-control" name="nama_mapel">
        </div>
       </div>   
       <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Guru</label>
        <div class="col-sm-10">
          <select class="form-select" name="guru_id" aria-label="Default select example">
            <option selected>Pilih Guru</option>
            @foreach($guru as $g)
            <option value="{{$g->id}}">{{$g->nama_guru}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row my-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit Form</button>
          <button></button>
        </div>
      </div>

    </form>
@endsection