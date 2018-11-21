<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Bienvenidos</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#" style="font-family: 'TradeGothicLTStd-Light';">Yanbal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
             <a class="nav-link" href="/" style="margin:2px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="makeups" style="margin:2px;">Makeups</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="fragrances" style="margin:2px;">Fragrances</a>
            </li>
            <li>
              <a href="mapa" class="btn btn-primary" style="margin:2px;">Ubicacion</a>
            </li>
            <li>
              <a href="makeups/create" class="btn btn-primary" style="margin:2px;" >Admi Makeups</a>
            </li>
            <li>
              <a href="fragrances/create" class="btn btn-primary" style="margin:2px;">Admi Fragancias</a>
            </li>
          </ul>
          
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endauth
                </div>
            @endif
        </div>
            
        
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/1-portada-d.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/2-portada-d.jpg" alt="Second slide">
            </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/3-portada-d.jpg" alt="Third slide">
          </div>
          </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>


      <div class="container marketing">

        <div class="row">

          <div class="col-lg-4">
            <img src="img/sobre.png" class="rounded" alt="Responsive image" width="365">
            <p><a class="btn btn-secondary" href="#" role="button">Mas.. &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img src="img/incorporate.png" class="rounded" alt="Responsive image" width="370">       
            <p><a class="btn btn-secondary" href="#" role="button">Incorporate &raquo;</a></p>
          </div>

          <div class="col-lg-4">
            <img src="img/historia.png" class="rounded" alt="Responsive image" width="365">
             <p><a class="btn btn-secondary" href="#" role="button">Historia &raquo;</a></p>
          </div>
        </div>


       

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Lo último en tendencias y nuestros productos, tips y ofertas especiales.</p>
          </div>
          <div class="col-md-5">
            <img src="img/boton-bo.jpg" class="rounded" alt="Responsive image" >
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="rounded-circle" style="font-family: 'TradeGothicLTStd-Light';">Según tu esfuerzo, ¡es un negocio rentable! <span class="text-muted"  >Gana lo que te propongas para hacer realidad tus sueños. .</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <br>
            <img class="featurette-image img-fluid mx-auto" src="img/elige.jpg" alt="Generic placeholder image" width="500" height="900px">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Tendencia navidad. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/2-portada-t.jpg" alt="Generic placeholder image" width="500" height="900px">
          </div>
        </div>

        <hr class="featurette-divider">

      </div>

      <div class="p-3 mb-2 bg-dark text-white">
        <p class="text-center" style="font-family: 'TradeGothicLTStd-Light';">Conoce nuestro catalogo.      
        </p>
      </div>
     
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/vendor/holder.min.js"></script>
  </body>
</html>
