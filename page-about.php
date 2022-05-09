<?php

/*
 *
 * Template Name: About 
 *
 */

get_header();
?>

<style>

  .wpcf7-form-control.wpcf7-submit{
    background: #2f2f2f;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    margin-top: 2rem;
    margin-bottom: 2rem; 
    width: 100%;
  }

  .wpcf7-form {
    background-color: #ffffff;
    border: 3px solid #000000;
    box-shadow: 0px 9px 21px 6px rgba(0,0,0,0.5);
    padding: 2em;
    overflow: none !important;
}

.wpcf7 input[type="text"],
.wpcf7 input[type="email"],
.wpcf7 textarea
{
    background-color: #fff;
    color: #000;
    width: 100%;
    margin-bottom: 2rem;
}

.wpcf7-not-valid-tip {
    color: #dc3232;
    font-size: 1em;
    font-weight: normal;
    display: block;
}

</style>

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
<div class="col-12" style="height: 100px;"></div>
<?php get_footer()?>

