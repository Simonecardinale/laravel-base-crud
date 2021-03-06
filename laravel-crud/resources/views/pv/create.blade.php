@extends('layouts.app')

@section('container')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('pv.store') }}">
    @method('POST')
    @csrf
    <div class="form-group">
      <label for="input-colore">Colore Prodotto</label>
      <input type="text" class="form-control" name="colore" id="input-colore">
    </div>
    <div class="form-group">
      <label for="input-prezzo">Prezzo</label>
      <input type="text" class="form-control" name="prezzo" id="input-prezzo">
      <label for="input-tipologia">Tipologia Prodotto</label>
      <input type="text" class="form-control" name="tipologia-prodotto" id="input-tipologia">
      <label for="liquidi-supportati">Liquidi Supportati</label>
      <input type="text" class="form-control" name="liquidi-supportati" id="liquidi-supportati">
    </div>
    <div class="form-group">
        <label for="input-descrizione">Drescrizione Prodotto</label>
        <textarea class="form-control" name="description" id="input-descrizione"></textarea>
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection