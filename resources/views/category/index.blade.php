@extends('layout.app')
@section('title', 'Kategori')
@section('content')

<table>
        <thead>
            <th>No</th>
            <th>Nama</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        </tbody>
        @endforeach

</table>

@endsection
