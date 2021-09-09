<?php

function edc_posttype_productos() {
     $labels = array(
         'name'                  => _x( 'Productos', 'edc' ),
         'singular_name'         => _x( 'Producto',  'edc' ),
         'menu_name'             => _x( 'Productos', 'Admin Menu text', 'edc' ),
         'name_admin_bar'        => _x( 'Productos', 'Add New on Toolbar', 'edc' ),
         'add_new'               => __( 'Agregar Nuevo', 'edc' ),
         'add_new_item'          => __( 'Agregar Nuevo Producto', 'edc' ),
         'new_item'              => __( 'Nuevo Producto', 'edc' ),
         'edit_item'             => __( 'Editar Producto', 'edc' ),
         'view_item'             => __( 'Ver Producto', 'edc' ),
         'all_items'             => __( 'Todos los productos', 'edc' ),
         'search_items'          => __( 'Buscar Productos', 'edc' ),
         'parent_item_colon'     => __( 'Padre Producto:', 'edc' ),
         'not_found'             => __( 'No se encontraro el producto.', 'edc' ),
         'not_found_in_trash'    => __( 'No se encontrar el producto en la Papelera', 'edc' ),
         'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'edc' ),
         'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'edc' ),
         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'edc' ),
         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'edc' ),
         'archives'              => _x( 'Archivo de Productos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'edc' ),
         'insert_into_item'      => _x( 'Insertar en Producto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'edc' ),
         'uploaded_to_this_item' => _x( 'Cargadas En Productos', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'edc' ),
         'filter_items_list'     => _x( 'Filtrar Lista de Productos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'edc' ),
         'items_list_navigation' => _x( 'Productos navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'edc' ),
         'items_list'            => _x( 'Productos lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'edc' ),
     );
  
     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'productos' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'menu_icon'          => 'dashicons-welcome-learn-more',
         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
         'hierarchical'       => false,
         'menu_position'      => 6,
         'supports'           => array( 'title', 'editor',  'thumbnail' ),
         'show_in_rest'       => true,
         'rest_base'          => 'producto'
     );
  
     register_post_type( 'productos', $args );
 }
  
 add_action( 'init', 'edc_posttype_productos' );

