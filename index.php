<!DOCTYPE.php>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Store</title>
    <link rel="stylesheet" href="./styles/style.css">
    <!--importar boostrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Bebas+Neue&family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
  <div class="container-fluid text-white">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark text-white ">
            <div class="container-fluid text-white ">
              <a class="navbar-brand" href="#"><img src="images\spiderman.png" class="logo img-fluid"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item" style="color: white">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item" style="color: white">
                    <a class="nav-link text-white" href="paginas/descuentos.php">Descuentos</a>
                  </li>
                  <li class="nav-item" style="color: white">
                    <a class="nav-link text-white" href="paginas/Coleccionables.php">Coleccionables</a>
                  <li class="nav-item" style="color: white">
                    <a class="nav-link text-white" href="paginas/contacto.php">Contacto</a>
                  </li>
                  <li class="nav-item" style="color: white">
                    <a class="nav-link text-white" href="paginas/superheroes.php
                    ">Superheroes</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    
      
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col text-center align-items-center flex-column">
          <h1>¡Productos destacados!</h1>
          <p>Compra los productos más vendidos de Marvel a un increíble precio</p>
          <a class="btn btn-secondary btn-lg" href="paginas\Coleccionables.php" role="button">Comprar ahora</a>


        </div>
        <div class="col text-center d-flex align-items-center ">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a title="VENOM" href=""><img src="images\1.png" class="d-block " alt="..." height="600" width="600"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>FUNKO VENOM COMIC EDITION</h5>
                  <p class="blanco">$137.900</p>
                </div>
              </div>
              <div class="carousel-item">
                <a title="CAPITAN AMERICA" href=""><img src="images\5.png" class="d-block  " height="600" width="600" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>CAPITÁN AMÉRICA ENDGAME</h5>
                  <p class="blanco">$89.900</p>
                </div>
              </div>
              <div class="carousel-item">
                <a title="Comic" href=""><img src="images\Electra.png" class="d-block  " height="600"  width="600" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>ELEKTRA</h5>
                  <p class="blanco">$95.000</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
        </div>
      </div>
    </div>
    </div>
      </div>
    </div>
    <!-- JavaScript -->
    <script src="js\bootstrap.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="MyScript\myscript.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
