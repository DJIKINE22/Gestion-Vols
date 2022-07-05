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
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="../img/logo.png" alt="" width=200px; ></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('vols') }}">VOLS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('reservations') }}">RESERVATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">COMPAGNIES</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">SKY MALI</a></li>
            <li><a class="dropdown-item" href="#">AIR BURKUNA</a></li>
            <li><a class="dropdown-item" href="#">AIR FRANCE</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
      <form  style="width:50%;margin:auto;" method="post" action="{{ route('reservations.update', $reserv->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="code">Nom  :</label>
              <input type="text" class="form-control" name="nom" value="{{ $reserv->nom }}"/>
          </div>

          <div class="form-group">
              <label for="date">Prenom :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $reserv->prenom}}"/>
          </div>
          <div class="form-group">
              <label for="heure">Sexe :</label>
              <input type="text" class="form-control" name="sexe" value="{{ $reserv->sexe }}"/>
          </div>
          <div class="form-group">
              <label for="plcA">Vol :</label>
              <input type="number" class="form-control" name="vol" value="{{ $reserv->vol }}"/>
          </div>
          <div class="form-group">
              <label for="plcB">Type de classe :</label>
              <input type="text" class="form-control" name="classe" value="{{ $reserv->classe }}"/>
          </div>
        
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection