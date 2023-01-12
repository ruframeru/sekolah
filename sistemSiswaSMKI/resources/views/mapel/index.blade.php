@extends('layout.main')

@section('title1', 'Data Siswa')
@section('title2', 'Semua Data')
@section('title3', 'Data Siswa')
    
@section('container')

@section('button')
<a href="/Mapel/create" class="btn btn-primary btn-sm">Tambah</a>
@endsection

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Kode</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Pengajar</th>
    </tr>
    </thead>
    @foreach($mapels as $m)
        <tbody>
            <tr>
                <td>{{ $m->kode_mapel }}</a></td>
                <td>{{ $m->nama_mapel }}</a></td>
                <td>{{ $m->guru->nama_guru }}</td>
                <td>
                    <a href="/Siswa/{{$m->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="/Siswa/{{$m->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>



@endsection