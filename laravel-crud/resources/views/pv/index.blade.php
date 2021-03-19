@extends('layouts.app')

@section('container') 
<a href="{{ route('pv.create') }}">Inserisci il prodotto</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Colore</th>
        <th scope="col">Tipologia Prodotto</th>
        <th scope="col">Liquidi Supportati</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($pv as $item)
            
        <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item -> colore }}</td>
            <td>{{ $item -> tipologiaProdotto }}</td>
            <td>{{ $item -> liquidiSupportati }}</td>
            <td>{{ $item -> prezzo }}</td>
            <td>{{ $item -> description }}</td>
            <td><a href="{{ route('pv.show', ['pv'=> $item -> id]) }}">Dettagli</a>
              <a href="{{ route('pv.edit', ['pv'=> $item -> id]) }}">Modifica</a>
              <form action="{{ route('pv.destroy', $item-> id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella</button>
              </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection