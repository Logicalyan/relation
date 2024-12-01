@extends('layout.app')
@section('title', 'buat menu')

@section('content')
<p>buat menu</p>
<form action="{{ route('menu.store') }}" method="post">
    @csrf

    <input type="text" name="name" id="">
    <input type="text" name="stock" id="">
    <select name="category_id" id="">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">
            {{ $category->name }}
        </option>
        @endforeach
    </select>
    <button type="submit">Simpan</button>
</form>
@endsection
