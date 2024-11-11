<!DOCTYPE html>
<html lang="es">

<head>
  <title>Fummo</title>
  <meta charset="UTF-8">
  <meta name="title" content="Título de la WEB">
  <meta name="description" content="Descripción de la WEB">
  <link rel="stylesheet" href="style_Card.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark  ">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">Fummo Bar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " href="../fummo/carrito.php"> <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="#">Ron</a></li>
              <li><a class="dropdown-item " href="#">Wisky</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Vodka</a></li>
            </ul>
          </li>

        </ul>


        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <p class="text-center fw-bolder fs-2">Fummo bar</p>
  <p class="text-center fst-italic  fs-4">Productos al mejor precio y precios mayoristas</p>


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/pasa.jpg" class="d-block w-100" alt="wiskys - marcas">
      </div>
      <div class="carousel-item">
        <img src="imagenes/pasa pasa.jpg" class="d-block w-100" alt="vodka - marcas - obsolute">
      </div>
      <div class="carousel-item">
        <img src="https://marianomadrueno.es/wp-content/uploads/2020/03/botellas-de-rones-del-mundo.png"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>


  </div>
  <br><br>
  <h1 class="text-center fw-bolder FS-2">CATALOGO</h1>
  <br>
  <h1 class="text-center fw-bolder ">Ron</h1>
  <div class="row row-cols-1 row-cols-md-5 g-3">
    <div class="col">
      <div class="card">
        <img src="imagenes/RM3750.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">3 años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">45.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/RM5.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">5 años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">50.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/RM8.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">8 años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">60.000 cop </p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/RM12.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">12 años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">70.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/RM3375.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">3 años</p>
          <p class="card-text fs-6">375ml</p>
          <p class="card-text fs-4">20.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/C3.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-6">Cartona 3 años</p>
          <p class="card-text fs-6">1000ml</p>
          <p class="card-text fs-4">60.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/LIMOSINA.jpg" class="card-img-top " alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-5">3 años Limosina</p>
          <p class="card-text fs-4">55.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/GARRAFON.jpg" class="card-img-top " alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron Medellin</h5>
          <p class="card-text fs-5">12 años Garrafon</p>
          <p class="card-text fs-4">115.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/RM12.jpg" class="card-img-top " alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Ron viejo de caldas</h5>
          <p class="card-text fs-5">12 años Garrafon</p>
          <p class="card-text fs-4">90.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>

  </div>


  <h1 class="text-center fw-bolder">wisky</h1>
  <div class="row row-cols-1 row-cols-md-5 g-3">
    <div class="col">
      <div class="card">
        <img src="imagenes/BMaster.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Buchanan's Master</h5>
          <p class="card-text fs-6"> 12 años</p>
          <p class="card-text fs-6"> 750ml</p>
          <p class="card-text fs-4">160.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/Bdeluxe.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Buchanan's Deluxe</h5>
          <p class="card-text fs-5">12 años</p>
          <p class="card-text fs-5">750ml</p>
          <p class="card-text fs-4">110.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/oldparr.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Old parr</h5>
          <p class="card-text fs-5">12años</p>
          <p class="card-text fs-5">750ml</p>
          <p class="card-text fs-4">145.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/BW.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Black && White</h5>
          <p class="card-text fs-5">12años</p>
          <p class="card-text fs-5">750ml</p>
          <p class="card-text fs-4">50.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/blacklabel.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Black Label</h5>
          <p class="card-text fs-6">12años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">100.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/passport.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">past port</h5>
          <p class="card-text fs-6">12 años</p>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">40.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>


  </div>

  <h1 class="text-center fw-bolder">Vodka</h1>
  <div class="row row-cols-1 row-cols-md-5 g-3">
    <div class="col">
      <div class="card">
        <img src="imagenes/Smirnoof.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Smirnoof</h5>
          <p class="card-text fs-6"> 750ml</p>
          <p class="card-text fs-4">70.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/Slulo.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Smirnoof Lulo</h5>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">60.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/Sebjpg.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Smirnoof Electric Berry</h5>
          <p class="card-text fs-6">750ml</p>
          <p class="card-text fs-4">90.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/absolut.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Absolut</h5>
          <p class="card-text fs-5">700ml</p>
          <p class="card-text fs-4">80.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/Absolut blue.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Absolut Blue</h5>
          <p class="card-text fs-5"> 700ml</p>
          <p class="card-text fs-4">100.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/absolutapple.jpg" class="card-img-top" alt="..." width="400" height="400">
        <div class="card-body">
          <h5 class="card-title fs-3">Absolut Apple</h5>
          <p class="card-text fs-5"> 700ml</p>
          <p class="card-text fs-4">100.000 cop</p>
          <a href="../fummo/carrito.php">
            <button type="button" class="btn btn-outline-warning btn-lg ">Comprar</button>
          </a>
        </div>
      </div>
    </div>


  </div>

  <p class="text-center fw-bolder fs-4 text-danger">Este es todo nuestro catalogo por el momento </p>
  <p class="text-center fw-bolder ">Si desea realizar una compra puede dirijisrse a la esquina superior derecha donde se
    encuntra un carrito de compras </p>
  <p class="text-center fw-bolder fs-5 text-primary">o haga click sobre el botton </p>

  <div class="d-grid gap-2 col-1 mx-auto">
    <a href="../fummo/carrito.php">
      <button type="button" class="btn btn-outline-warning btn-lg ">carrito<svg xmlns="http://www.w3.org/2000/svg"
          width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path
            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg></button>
    </a>
  </div>





  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github"
          viewBox="0 0 16 16">
          <path
            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
        </svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted fw-bolder">© 2022 Ucc-Students, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://twitter.com/BarFummo" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter"
            viewBox="0 0 16 16">
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="http://instagram.com/fummo_bar" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/profile.php?id=100086721768791"
          target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-facebook" viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
          <use xlink:href="#facebook"></use></svg>
        </a></li>
    </ul>
  </footer>

</body>

</html>