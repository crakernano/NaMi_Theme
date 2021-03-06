<?php

function edc_query_cursos($cantidad = -1) {
     $args = array(
          'post_type' => 'productos',
          'posts_per_page' => $cantidad
     );

     $clases = new WP_Query($args);

     while( $clases->have_posts() ): $clases->the_post();
     
      #printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
     ?>

          <div class="col-md-6 col-lg-4">
	       <div class="card movil-aplication">
                    <?php the_post_thumbnail('mediano', array('class' => 'card-img-top')) ?>
		    <div class="card-body"
                    style="width: max-content;">
			<h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ;?></a></h3>
			<span> Salud y bienestar </span>
                         <p class="card-text">
                              <?php #echo wp_trim_words( get_the_content(), 10, '.'  ); ?>
                         </p>
                    </div>
               </div><!--.card-->
          </div><!--.col-md-6-->


     <?php
     endwhile; wp_reset_postdata();
}


function edc_query_iconos($cantidad = -1) {
     $args = array(
          'post_type' => 'productos',
          'posts_per_page' => $cantidad
     );

     $clases = new WP_Query($args);
     ?>
     <hr style="border: 2px solid; border-radius: 5px; margin-top: 3em;"/>
     <div class="container-sm" style="margin-top: 0.5em;">
     <div class="row">
     
     <?php
     while( $clases->have_posts() ): $clases->the_post();
     
      #printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
      
     ?>


    <div class="col">    
    <a href="<?php the_permalink(); ?>">
    
    <img  alt="<?php the_title();?>" width="70px" src="<?php the_post_thumbnail() ?>
    </a>
    
    </div>



     

     <?php endwhile; wp_reset_postdata(); ?>

     </div>
     </div>
     <?php
}