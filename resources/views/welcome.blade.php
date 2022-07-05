
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>SONI TOUR </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">

    

    

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('img/logo.ico')}}" sizes="180x180">
<link rel="icon" href="{{asset('img/logo.ico')}}" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .carousel-inner {
    width: 50%;
    height:50%;
    margin: auto;
    margin-top:30px;
    margin-bottom:20px;
  }
      .carousel-inner img {
    width: 100%;
    height:50%;
    
  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('offcanvas.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
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

<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
  </nav>
</div>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
  </div>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/photo.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3 >SONI TOUR,Notre Agence de Voyage!</h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../img/AirFrance.png" alt="Airfrance" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Air France</h3>
        <p>La compagnie française de transport aerien!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../img/sky-mali.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SKY MALI</h3>
        <p>La compagnie Malienne de transport aerien!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <div class="table-responsive">
  <table class="table caption-top ">
  <caption scope="col" >Programmes du Jour </caption>
  <thead>
    <tr>
    <th scope="col">Identifiants</th>
      <th scope="col">Companies</th>
      <th scope="col">Vols</th>
      <th scope="col">Departs</th>
      <th scope="col">Arrivés</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>SKYMALI</td>
      <td>V103K</td>
      <td>BKO/SENOU</td>
      <td>KAYES/DAGDAG</td>
      <td><a href="/reservations/create" class="btn btn-info">Reserver</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>AIR BURKINA</td>
      <td>VL309B</td>
      <td>FASO/OUAGGA</td>
      <td>BKO/SENOU</td>
      <td><a href="" class="btn btn-info">Reserver</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>AIR FRANCE</td>
      <td>V0023F</td>
      <td>PARIS/DEGOLLE</td>
      <td>BKO/SENOU</td>
      <td><a href="" class="btn btn-info">Reserver</a></td>
    </tr>
  </tbody>
</table>
   

</main>



    <script src="{{('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script src="{{asset('offcanvas.js')}}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
