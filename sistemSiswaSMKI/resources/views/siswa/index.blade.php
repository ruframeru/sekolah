@extends('layout.main')

@section('title1', 'Data Siswa')
@section('title2', 'Semua Data')
@section('title3', 'Data Siswa')
    
@section('container')

@section('button')
<a href="/Siswa/create" class="btn btn-primary btn-sm">Tambah</a>
@endsection

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">NIS</th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Kelas</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    @foreach($datasiswa as $siswa)
        <tbody>
            <tr>
                <td><a href="/Siswa/{{$siswa->id}}/myprofile" style="color: black;">{{ $siswa->nis }}</a></td>
                <td><a href="/Siswa/{{$siswa->id}}/myprofile" style="color: black;">{{ $siswa->nama_siswa }}</a></td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ $siswa->kelas->nama_kelas }}</td>
                <td>{{ $siswa->tgl_lahir }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>
                    <form action="/Siswa/{{$siswa->id}}/delete" method="POST">
                        @csrf
                        <a href="/Siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
{{ $datasiswa->links() }}


@endsection