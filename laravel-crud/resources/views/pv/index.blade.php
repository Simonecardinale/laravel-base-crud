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
      
      @foreach ($pv as $item)
            
        <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item -> colore }}</td>
            {{-- <td>{{ $item -> liquidi-supportati }}</td> --}}
            <td>{{ $item -> prezzo }}</td>
            <td>{{ $item -> description }}</td>
            <td><a href="{{ route('pv.show', ['pv'=> $item -> id]) }}">Dettagli</a></td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection