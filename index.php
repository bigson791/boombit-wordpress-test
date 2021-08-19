<?php get_header(); ?>

          <div class="row">
            <!--Entradas-->
            <div class="col-lg-9">
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();?> 
                    <div class="card-body">
                    <a href="<?php the_permalink();?>"> 
                        <h2 ><?php the_title()?></h2> 
                    </a>
                    <p class="small mb-0">Fecha: <?php the_time('F j, Y'); //trae la fecha de la entrada?></p>
                    <p class="small mb-0">Autor: <?php the_author();//trae el autor de la entrada?></p>
                    <p class="small mb-0">Categorías: <?php the_category('/');?> Etiquetas: 
                    <?php the_tags('',' / ', '') ?>
                    </p>
                    <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array(
                            'class'=> 'img-fluid mb-3'
                        ));
                    }
                    ?>
                   <!-- <img src="/img/1200.jpeg" alt="" class="img-fluid mb-3">-->
                    <p> <?php the_excerpt();//trae el parrafo de la entrada?> </p>
                    <a href="<?php the_permalink();?>" class="btn btn-primary">Más info...</a>
                </div>
                <?php endwhile; endif; ?>

                
                <!--Entradas-->
                <!--Paginación-->
                    <div class="card-body">
                        <?php
                           get_template_part( 'template-parts/content', 'paginacion');
                        ?>
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