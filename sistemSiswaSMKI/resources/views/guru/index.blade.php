@extends('layout.main')

@section('container')

@section('button')
<a href="/Guru/create" class="btn btn-primary btn-sm">Tambah</a>
@endsection

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nama Guru</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Nomor Telpon</th>
    </tr>
    </thead>
    @foreach($dataguru as $guru)
        <tbody>
            <tr>
                <td>{{ $guru->nama_guru }}</td>
                <td>{{ $guru->jenkel_guru }}</td>
                <td>{{ $guru->no_tlp_guru }}</td>
                <td>
                    <a href="/Guru/{{$guru->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="/Guru/{{$guru->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
{{$dataguru->links()}}


@endsection