<?php  get_header(); ?>
    <?php include 'nav.php'; ?>

<?php $html = edc_imagen_destacada( get_the_ID() );  
     // $html[0] retorna el HTML
     // $html[1] retornar si la imagen existe

     echo $html[0];
?>
<?php while(have_posts()): the_post(); ?>
<article class="font-sans relative py-24 md:py-28 bg-white overflow-hidden" itemscope itemtype="http://schema.org/BlogPosting" id="post-box">
    <header class="relative px-4 sm:px-6 lg:px-8">
      <div class="text-lg max-w-prose mx-auto mb-4">
        <h1 class="mt-2 mb-2 text-3xl text-center-DIS leading-8 font-extrabold tracking-tight-DIS text-gray-800 sm:text-4xl sm:leading-10" itemprop="name headline">
        <?php the_title(); ?></h1>
      </div>
      <p class="max-w-prose mx-auto mb-2 text-lg uppercase text-gray-500"><span class="font-bold tracking-wide"><time class="dt-published text-xs" datetime="2021-02-03T00:00:00+00:00" itemprop="datePublished"> <?php the_time( get_option('date_format') ); ?> </time></span></p>
      <div class="max-w-prose text-lg mx-auto mt-4 soopr-btn soopr-btn-def" style="min-height: 36px;"></div>
    </header>
    <div class=" px-4 md:px-0 text-gray-700 mx-auto" itemprop="articleBody">

    	<?php the_content(); ?>
    </div>


    <span class="post-author">Escrito por: 
	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename') ); ?>"><?php the_author(); ?></a>
    <span>  


</article>

          <div class="comentarios container">
               <?php
                    if( comments_open() || get_comments_number() ): 
                         comments_template();
                    else:
                         echo "<p class='text-center comentarios-cerrados alert alert-danger'>Los comentarios están cerrados</p>";
                    endif;

               ?>
          </div>

<?php endwhile; ?>
<?php  get_footer(); ?>
