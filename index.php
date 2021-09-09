<?php  get_header(); ?>
<?php include 'nav.php' ?>
     <div class="container mb-4">
         <div class="row justify-content-center">
              <div class="col-md-8">
                   <blockquote class="subtitulo text-center pl-3">
                         <?php
                              $id_blog = get_option('page_for_posts');
                              echo get_post_meta($id_blog, 'edc_blog_slogan_blog', true);
                         ?>
                   </blockquote>
              </div>
         </div>
    </div>

<div class="container">
     <div class="row">
          <main class="col-lg-9 col-md-8">
               <h1 class="text-4xl font-black">Blog</h1>
		<ul class="mt-12">
               <?php while(have_posts()): the_post(); ?>
			<li class="mt-16 list-reset"> <time class="uppercase text-xs text-gray-500 font-bold"><?php the_time( get_option('date_format') ); ?></time>
        		<h2 class="mt-1 text-2xl tracking-tight font-extrabold text-gray-900 sm:leading-none md:text-3xl">
        			<a href="<?php the_permalink(); ?>">
                         	<?php the_title(); ?>
                        	</a> 
			</h2>
			<div class="post-thumbnail">
				<?php the_post_thumbnail('mediano', array('class' => 'img-fluid' ) ); ?>
			</div>
        		<div class="mt-6 post-content">
          			<p><?php the_excerpt(); ?></p>
        		</div>
        		<div class="mt-10"> <a class="text-blue-500 uppercase text-sm tracking-wide font-black content-link" href="<?php the_permalink(); ?>">Read More</a> </div>
      			</li>
      			<hr class="w-full bg-gray-100 my-12" style="height: 1px;" />

<!--
                    <div class="row entrada mb-4">
                         <div class="col-md-4">
                              <?php the_post_thumbnail('mediano', array('class' => 'img-fluid' ) ); ?>
                         </div>
                         <div class="col-md-8">
                              <div class="contenido-entrada pt-4 pt-md-0">
                                   <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                   </a>
                                   
                                   <?php get_template_part('template-parts/meta', 'post'); ?>

                                   <p><?php the_excerpt(); ?></p>
                                   <a href="<?php the_permalink(); ?>" class="btn btn-primary text-light">Ver Entrada</a>
                              </div>
                         </div>
		    </div>
-->

               <?php endwhile; ?>
	       </ul>
               <ul class="pagination pagination-lg justify-content-center mt-5">
                    <li class="page-item">
                         <?php
                              previous_posts_link('
                                   <span class="page-link" aria-hidden="true">&laquo; Anteriores </span>
                                   <span class="sr-only">Anteriores</span>
                              ');
                         ?>
                    </li>

                    <li class="page-item">
                         <?php
                              next_posts_link('
                                   <span class="page-link" aria-hidden="true">Siguiente &raquo;</span>
                                   <span class="sr-only">Siguientes</span>
                              ');
                         ?>
                    </li>
               </ul>
          </main>

          <?php get_sidebar(); ?>
     </div>
</div>

<?php  get_footer(); ?>
