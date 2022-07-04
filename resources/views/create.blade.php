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
          <a class="nav-link" href="#">RESERVATIONS</a>
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
      <form style="width:50%;margin:auto;" method="post" action="{{ route('vols.store') }}">
        @csrf
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
    <input type="time" class="form-control" id="formGroupExampleInput3" name="heure_depart" placeholder="10H30">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput4">Nombre de place en Classe A</label>
    <input type="number" class="form-control" id="formGroupExampleInput4" name="nbre_plc_classA" placeholder="ClasseA">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput5">Nombre de place en Classe B</label>
    <input type="number" class="form-control" id="formGroupExampleInput5" name="nbre_plc_classB" placeholder="ClasseB">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput6">Prix Classe A</label>
    <input type="number" class="form-control" id="formGroupExampleInput6" name="prixA" placeholder="1200000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput7">Prix Classe B</label>
    <input type="number" class="form-control" id="formGroupExampleInput7" name="prixB" placeholder="2000000">
  </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection