@extends('layout.app')
@section('title', 'buat Kategori')

@section('content')


<form action="{{ route('category.store') }}" method="post">
    @csrf

    <input type="text" name="name" id="">
    <button type="submit">Simpan</button>
</form>
@endsection
