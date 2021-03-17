@extends('layouts.app')

@section('container') 
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Colore</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item -> colore }}</td>
            {{-- <td>{{ $item -> liquidi-supportati }}</td> --}}
            <td>{{ $item -> prezzo }}</td>
            <td>{{ $item -> description }}</td>
        </tr>
    </tbody>
</table>
@endsection