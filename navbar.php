<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
     
       <a href="<?php echo esc_url( home_url('/') ); ?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">

                        <?php
                        $opciones = get_option('edc_theme_options');
                        if(isset($opciones['logotipo'])): ?>
                            <img src="<?php echo $opciones['logotipo']; ?>" class="img-fluid">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="img-fluid">
                        <?php endif; ?>
                    </a>      


     <?php
                              $args = array(
				   'menu_class' => 'nav col-12 col-md-auto mb-2 justify-content-center mb-md-0',
				   'menu_item' => 'nav-link px-2 link-dark',
				   'container_id' => 'nav_principal',
				   'container'            => 'ul',
				   'items_wrap'           => '<ul id="%1$s" class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">%3$s</ul>',
                                   'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
				   'theme_location' => 'menu_principal',
				   'add_li_class'  => 'nav-link px-2 link-dark'
                              );

              wp_nav_menu($args);

        ?>

      <div class="col-md-3 text-end">
        <?php get_search_form(); ?> 
      </div>
    </header>
  </div>

  <div class="b-example-divider"></div>


