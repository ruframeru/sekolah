@extends('layout.main')
 
@section('container')


@section('button')
<button type="submit" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#smallModal">button</button>
@endsection

<div class="modal fade" id="smallModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Small Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/Kelas/create" method="POST" autocomplete="off">
            @csrf
        <div class="modal-body">
          <div class="mb-1"><label for="nilai" class="">Kelas</label></div>
          <div class="">
            <input type="text" class="form-control" name="nama_kelas">
          </div>
        </div>
        {{-- <div class="modal-body">
            <div class="mb-1"><label for="nilai" class="">Wali Kelas</label></div>
            <select class="form-select" name="guru_id" aria-label="Default select example">
                <option selected>Pilih Guru</option>
                @foreach($walikelas as $guru)
                <option value="{{$guru->id}}">{{$guru->nama_guru}}</option>
                @endforeach
              </select>
        </div> --}}
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>


@endsection