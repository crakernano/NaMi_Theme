<?php

/*
 *
 * para que funcione el prefijo tiene que llamarse como el type 
 *
 */

get_header();
?>

<style>

.app-description{
	box-shadow:0px 3px 4px 0px rgba(0,0,0,0.14),0px 3px 3px -2px rgba(0,0,0,0.12),0px 1px 8px 0px rgba(0,0,0,0.2);
	margin: 5px 50px 10px 50px;
}


.app-description #description-content{padding:20px 40px;}

</style>

<?php include 'nav.php'; ?>


<main class="app-description">
<?php while( have_posts() ): the_post(); ?>

    <div class="row mb-3">
      <div class="col-md-2 themed-grid-col"><?php the_post_thumbnail() ?></div>
      <div class="col-md-10 themed-grid-col">

		<h1><?php the_title();?></h1>
		<span id="category">Categoria: Juegos</span>
<?php echo "TIPO: ".get_post_type(); ?>
		<div class="row mb-3">
			<div class="col-md-6 themed-grid-col"><span id="rate">Valoración: 4/5</span></div>
			<div class="col-md-6 themed-grid-col" ><span id="num-downloads">Descargas: 25.000</span></div>
		</div>

		<div class="row mb-3" style="margin-top:50px;">
		<div class="col-md-6 themed-grid-col">
		<a
                href="#"
                class="font-bold text-gray-500 px-8 py-4 rounded-md bg-gray-50 hover:bg-gray-400 hover:text-gray-50"
		>Descarga para Android</a>
		</div>

		<div class="col-md-6 themed-grid-col">
                <a
                href="#"
                class="font-bold text-gray-500 px-8 py-4 rounded-md bg-gray-50 hover:bg-gray-400 hover:text-gray-50"
                >Descarga para Apple</a>
		</div>

		</div>

      </div>
    </div>
    
    <div class="row mb-3">
        <div class = "col-md-12 themed-grid-col" id="description-content">
		<?php $imagenes = get_post_meta(get_the_ID(), 'edc_galeria_imagenes', true);

		if(is_array($imagenes) || is_object($imagenes)){
		 foreach($imagenes as $id => $imagen):?>
		<?php $img = wp_get_attachment_image_url($id, 'full'); ?> 

		<img src="<?php echo $img; ?>" class="img-fluid">

		<?php endforeach;
		}//final del if?>
        </div>
    </div>

    <div class="row mb-3">
	<div class = "col-md-12 themed-grid-col" id="description-content">
		<?php the_content(); ?>
	</div>
    </div>
<?php endwhile; ?>	

</main>

<?php get_footer()?>
