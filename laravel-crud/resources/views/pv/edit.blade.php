@extends('layouts.app')

@section('container')

<form method="post" action="{{ route('pv.update', $item-> id) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="input-colore">Colore Prodotto</label>
      <input type="text" class="form-control" name="colore" id="input-colore" value="{{ $item -> colore }}">
    </div>
    <div class="form-group">
      <label for="input-prezzo">Prezzo</label>
      <input type="text" class="form-control" name="prezzo" id="input-prezzo" value="{{ $item -> prezzo }}">
      <label for="input-tipologia">Tipologia Prodotto</label>
      <input type="text" class="form-control" name="tipologia-prodotto" id="input-tipologia" value="{{ $item -> tipologiaProdotto }}">
      <label for="liquidi-supportati">Liquidi Supportati</label>
      <input type="text" class="form-control" name="liquidi-supportati" id="liquidi-supportati" value="{{ $item -> liquidiSupportati }}">
    </div>
    <div class="form-group">
        <label for="input-descrizione">Drescrizione Prodotto</label>
        <textarea class="form-control" name="description" id="input-descrizione">{{ $item -> description }}</textarea>
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection