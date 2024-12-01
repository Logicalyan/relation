@extends('layout.app')
@section('title', 'Menu')
@section('content')

<p>ini menu</p>

<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->stock }}</td>
            <td>{{ $menu->category->name }}</td>
        </tr>
    </tbody>
    @endforeach

</table>
@endsection
