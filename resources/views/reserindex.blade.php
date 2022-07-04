<!-- index.blade.php -->

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
  .card-header {
    width:50%;
    margin: auto;
    margin-top: 10px;
    text-align: center;
    font-weight:bold;
    font-size:20px;
    background-color:#FFA07A;
  }
</style>
<div class="card-header">
  La liste de Reservation
  </div>

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
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Sexe</th>
                <th scope="col">Vol</th>
                <th scope="col">Type de place</th>
                <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <th scope="row">{{$reservation->id}}</th>
                    <td>{{$reservation->nom}}</td>
                    <td>{{$reservation->prenom}}</td>
                    <td>{{$reservation->sexe}}</td>
                    <td>{{$reservation->vol}}</td>
                    <td>{{$reservation->classe}}</td>
                    <td><a href="{{ route('reservations.edit', $reservation->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
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
    {!!$reservations->links()!!}
 </div>
</div>
    @endsection