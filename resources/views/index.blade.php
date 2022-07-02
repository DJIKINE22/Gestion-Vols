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
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    
        <table class="table  table-bordered table-responsive ">
        
            <thead>
                <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Code</th>
                <th scope="col">Date de depart</th>
                <th scope="col">Heure de depart</th>
                <th scope="col">Nombre de place de classe A</th>
                <th scope="col">Nombre de place de classe B</th>
                <th scope="col">Prix de la classe A</th>
                <th scope="col">Prix de la classe B</th>
                <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($vol as $vol)
                <tr>
                    <th scope="row">{{$vol->id}}</th>
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
    </div>
 </div>
</div>
    @endsection