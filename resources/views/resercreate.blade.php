<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
  
    margin-top: 40px;
  }
  .card-header {
    width:50%;
    margin: auto;
    margin-top: 50px;
    text-align: center;
    font-weight:bold;
    font-size:20px;
    background-color:#FFA07A;
  }
</style>


  <div class="card-header">
  Ajouter une reservation
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

      <form style="width:50%;margin:auto;" method="post" action="{{ route('reservations.store') }}">
        @csrf
        
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="nom" placeholder="Nom du passagers">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="prenom" placeholder="Prenom du passager">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="sexe" placeholder="sexe">
    </div>
    <div class="col">
      <select name="vol">
        @foreach($vols as $vol)
          <option value="{{$vol->id}}">{{$vol->code}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
    <select id="disabledSelect" class="form-control" name="classe">
        <option>..Choisir une Classe..</option>
        <option> Classse A</option>
        <option> Classe B</option>
      </select>
    </div>
    </div>
  </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection