<?php

/*
 *
 * Template Name: Listado productos 
 *
 */

get_header();
?>

<!-- <body class='h-full'><div class="relative py-24 md:py-28 bg-white overflow-hidden font-sans"> -->
<?php include 'nav.php' ?> 
                         <?php while(have_posts()): the_post();
                                   the_content();

                                   $titulo = get_the_title();

                              endwhile;
                         ?>

  <div class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-lg max-w-prose mx-auto mb-8">
      <h1
        class="font-misc mt-2 mb-4 text-4xl text-center-DIS leading-8 font-extrabold text-gray-800 md:text-4xl sm:leading-10">
	<?php echo $titulo; ?>	
	</h1>
        <div class="max-w-prose mx-auto mt-4 mb-6 soopr-btn soopr-btn-def" style="min-height: 36px;"></div>
    </div>
    <div class="prose prose-lg text-gray-800 mx-auto" style="display: flex;">
      <?php edc_query_cursos(); ?>
    </div>
  </div>
</div>


<?php get_footer()?>


