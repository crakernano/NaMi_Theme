<?php

/*
 *
 * Template Name: About 
 *
 */

get_header();
?>

<?php include 'nav.php' ?>
<?php while(have_posts()): the_post();


	$titulo = get_the_title();
?>
<div class="container">
  <div class="row">
  <div class="col-6">
	<?php the_content(); ?>
  </div>
  <div class="col-6">
	<?php 
	$id_home = get_option('page_on_front');
	$miembros = get_post_meta($id_home,'edc_group_nosotros',true);
	foreach($miembros as $miembro){
	?>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $miembro['imagen_miembro'];  ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $miembro['nombre_miembro']; ?></h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"><?php echo $miembro['cargo_miembro']; ?></small></p>
      </div>
    </div>
  </div>
</div>               
	<?php } ?>
  </div>
  </div>
</div>
<?php endwhile;?>

<?php get_footer()?>

