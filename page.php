<?php  get_header(); ?>
    <?php include 'nav.php'; ?>

     <?php while(have_posts()): the_post(); 

          get_template_part('template-parts/contenido', 'paginas');
     endwhile; ?>

<?php  get_footer(); ?>
