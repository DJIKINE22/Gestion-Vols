@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le vol
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

      <form method="post" action="{{ route('vols.update', $vol->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="code">Code :</label>
              <input type="text" class="form-control" name="code" value="{{ $vol->code }}"/>
          </div>

          <div class="form-group">
              <label for="date">Date de depart :</label>
              <input type="date" class="form-control" name="date" value="{{ $vol->date_depart }}"/>
          </div>
          <div class="form-group">
              <label for="heure">Heure de depart :</label>
              <input type="time" class="form-control" name="heure" value="{{ $vol->heure_depart }}"/>
          </div>
          <div class="form-group">
              <label for="plcA">Nombre de place de la Classe A :</label>
              <input type="int" class="form-control" name="plcA" value="{{ $vol->nbre_plc_classA }}"/>
          </div>
          <div class="form-group">
              <label for="plcB">Nombre de place de la Classe B :</label>
              <input type="int" class="form-control" name="plcB" value="{{ $vol->nbre_plc_classB }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection