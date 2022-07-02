<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un vol
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form>
 
</form>

      <form method="post" action="{{ route('vols.store') }}">
.         @csrf
<div class="form-group">
    <label for="formGroupExampleInput">Code Vol</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="code" placeholder="AF0520">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date de Depart</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" name="date_depart" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput3">Heure de Depart</label>
    <input type="time" class="form-control" id="formGroupExampleInput3" name="heure_depart" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput4">Nombre de place en Classe A</label>
    <input type="text" class="form-control" id="formGroupExampleInput4" name="nbre_plc_classA" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput5">Nombre de place en Classe B</label>
    <input type="number" class="form-control" id="formGroupExampleInput5" name="nbre_plc_classB" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput6">Prix Classe A</label>
    <input type="number" class="form-control" id="formGroupExampleInput6" name="prixA" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput7">Prix Classe B</label>
    <input type="number" class="form-control" id="formGroupExampleInput7" name="prixB" placeholder="Another input">
  </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection