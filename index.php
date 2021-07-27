<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
    <?php wp_head() ?>
  </head>
  <body>

    <!-- MENÚ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Boombit-Wordpress-test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="#">Registro </a>
                    <a class="nav-link" href="#">Inicio</a>
                    <a class="nav-link" href="#">Contacto</a>
                </div>  
            </div>       
        </div>
      </nav>
      <!-- MENÚ -->

      <!-- CONTENIDO -->
      <div class="container">
          <h2 class="my-5 text-center text-primary">Bommbit-Wordpress-Test</h2>
          <hr>

          <div class="row">
            <!--Entradas-->
            <div class="col-lg-9">

                <div class="card-body">
                    <a href="single.html">
                        <h2 >Titulo de la entrada</h2> 
                    </a>
                    <p class="small mb-0">Fecha: 22-04-2019</p>
                    <p class="small mb-0">Autor: Elfego Apen</p>
                    <p class="small mb-0">Categorías: <a href="#">Animales</a> / <a href="#">Comida</a> Etiquetas: <a href="#">Azul</a> / <a href="#">Verde</a></p>

                    <img src="/img/1200.jpeg" alt="" class="img-fluid mb-3">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>
                <!--Entradas-->
                <div class="card-body">
                    <a href="single.html">
                        <h2 >Titulo de la entrada</h2> 
                    </a>
                    <p class="small mb-0">Fecha: 22-04-2019</p>
                    <p class="small mb-0">Autor: Elfego Apen</p>
                    <p class="small mb-0">Categorías: <a href="#">Animales</a> / <a href="#">Comida</a> Etiquetas: <a href="#">Azul</a> / <a href="#">Verde</a></p>

                    <img src="/img/1200.jpeg" alt="" class="img-fluid mb-3">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>
                <!--Entradas-->
                <!--Paginación-->
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                              <li class="page-item active   "><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                            </ul>
                          </nav>
                    </div>   

                <!--Paginación-->
            </div>
            <!--Entradas-->

            <!--Aside-->
            <div class="col-lg-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="/img/vertical.jpg" alt="" class="img-fluid">
                </div>                  
            </div>
            <!--Aside-->
          </div>          
      </div>    
      <!-- CONTENIDO -->
      <footer class="container-fluid py-4 text-center text-light bg-dark">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5> 
      </footer>

      <!-- Optional JavaScript; choose one of the two! -->
      <?php wp_footer(); ?>

  </body>
</html> 