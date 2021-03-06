 <header class="header py-5 encabezado">
        <div class="container">
            <div class="row justify-content-center align-items-center">
            <?php if (is_page('productos')){ ?>
                <div class="col-md-2 col-8 mb-4 mb-md-0">
            <?php }else{?>
                <div class="col-md-4 col-8 mb-4 mb-md-0">
            
            <?php
            } ?>
                    <a href="<?php echo esc_url( home_url('/') ); ?>">

                        <?php
                        $opciones = get_option('edc_theme_options');
                        if(isset($opciones['logotipo'])): ?>
                            <img src="<?php echo $opciones['logotipo']; ?>" class="img-fluid" id="logotipo">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="img-fluid" id="logotipo">
                        <?php endif; ?>
                    </a>
                    
                </div>
                <?php if (is_page('productos')){ ?>
                    <div class="col-md-2"><h1 class="h1" style="text-transform: capitalize; font-family: 'Bebas Neue', cursive;"><?php echo get_the_title(); ?><h2></div>
                <?php } ?>
                <div class="col-md-8">
                  <nav class="navbar navbar-expand-md navbar-light justify-content-center">
                        <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                              $args = array(
                                   'menu_class' => 'nav nav-justified flex-column flex-md-row text-center  justify-content-lg-end',
                                   'container_id' => 'nav_principal',
                                   'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
                                   'theme_location' => 'menu_principal'
                              );

                              wp_nav_menu($args);

                         ?>
                    </nav>
                </div> <!--.col-md-8-->
            </div><!--.row-->
        </div> <!--container-->
    </header>
<div class="b-example-divider"></div>
