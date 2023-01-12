@extends('layout.main')

@section('container')

@if (auth()->user()->role == 'admin')
    Selamat Datang Admin     
@endif

@endsection