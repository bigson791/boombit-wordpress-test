<?php get_header(); ?>

          <div class="row">
            <!--Entradas-->
            <div class="col-lg-9">
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();?> 
                    <div class="card-body">
                    <a href="<?php the_permalink();?>" > 
                        <h2 ><?php the_title()?>></h2> 
                    </a>
                    <p class="small mb-0">Fecha: <?php the_date() //trae la fecha de la entrada?></p>
                    <p class="small mb-0">Autor: <?php the_author()//trae el autor de la entrada?></p>
                    <p class="small mb-0">Categorías: <a href="#">Animales</a> / <a href="#">Comida</a> Etiquetas: <a href="#">Azul</a> / <a href="#">Verde</a></p>

                    <img src="/img/1200.jpeg" alt="" class="img-fluid mb-3">
                    <p> <?php the_excerpt()//trae el parrafo de la entrada?> </p>
                    <a href="<?php the_permalink();?>" class="btn btn-primary">Más info...</a>
                </div>
                <?php endwhile; endif; ?>

                
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
<?php get_footer(); ?>