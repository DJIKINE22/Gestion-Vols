<!-- index.blade.php -->

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>Code</td>
          <td>Date de depart</td>
          <td>Heure de depart</td>
          <td>Nombre de place de classe A</td>
          <td>Nombre de place de classe B</td>
          <td>Prix de la classe A</td>
          <td>Prix de la classe B</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($vol as $vol)
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->code}}</td>
            <td>{{$vol->date_depart}}</td>
            <td>{{$vol->heure_depart}}</td>
            <td>{{$vol->_nbre_plc_classA}}</td>
            <td>{{$vol->nbre_plc_classB}}</td>
            <td>{{$vol->prixA}}</td>
            <td>{{$vol->prixB}}</td>
            <td><a href="{{ route('vols.edit', $vol->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection