@extends('layouts.app')

@section('container')
<form>
    <div class="form-group">
      <label for="input-colore">Colore Prodotto</label>
      <input type="text" class="form-control" name="colore" id="input-colore">
    </div>
    <div class="form-group">
      <label for="input-prezzo">Prezzo</label>
      <input type="text" class="form-control" name="prezzo" id="input-prezzo">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection