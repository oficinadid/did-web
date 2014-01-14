<?php

add_theme_support('post-thumbnails');

/*  Limpiamos head
/* ------------------------------------ */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/*  Enqueue scripts
/* ------------------------------------ */
function did_scripts()
{	

	wp_enqueue_script( 'jquery', true );
    wp_enqueue_script( 'hoverIntent', true );
    wp_enqueue_script( 'pjax', get_template_directory_uri() . '/js/vendor/jquery.pjax.js', array( 'jquery' ),'', true );
    wp_enqueue_script( 'looper', get_template_directory_uri() . '/js/vendor/looper.min.js', array( 'jquery' ),'', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/main.min.js', array( 'jquery' ),'', true );

}
add_action( 'wp_enqueue_scripts', 'did_scripts' );

/*  Custom post types
/* ------------------------------------ */

// Custom Post Type Proyecto
function cpt_proyectos() {

	$labels = array(
		'name'                => 'Proyectos',
		'singular_name'       => 'Proyecto',
		'menu_name'           => 'Proyectos',
		'parent_item_colon'   => 'Parent Proyecto:',
		'all_items'           => 'All Proyectos',
		'view_item'           => 'View Proyecto',
		'add_new_item'        => 'Add New Proyecto',
		'add_new'             => 'New Proyecto',
		'edit_item'           => 'Edit Proyecto',
		'update_item'         => 'Update Proyecto',
		'search_items'        => 'Search Proyectos',
		'not_found'           => 'No Proyectos found',
		'not_found_in_trash'  => 'No Proyectos found in Trash',
	);
	$args = array(
		'label'               => 'proyecto',
		'description'         => 'Proyectos DID',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'proyecto', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_proyectos', 0 );

// Custom Post Type Equipo
function cpt_equipo() {

	$labels = array(
		'name'                => 'Miembros Equipo',
		'singular_name'       => 'Miembro Equipo',
		'menu_name'           => 'Equipo',
		'parent_item_colon'   => 'Parent Miembro Equipo:',
		'all_items'           => 'All Miembros Equipo',
		'view_item'           => 'View Miembro Equipo',
		'add_new_item'        => 'Add New Miembro Equipo',
		'add_new'             => 'New Miembro Equipo',
		'edit_item'           => 'Edit Miembro Equipo',
		'update_item'         => 'Update Miembro Equipo',
		'search_items'        => 'Search miembro equipo',
		'not_found'           => 'No miembros equipo found',
		'not_found_in_trash'  => 'No miembros equipo found in Trash',
	);
	$args = array(
		'label'               => 'equipo',
		'description'         => 'Equipo DID',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'equipo', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_equipo', 0 );