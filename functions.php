<?php 

// Previne o acesso direto ao arquivo.
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

/*
 * Recursos suportados pelo tema por padrão. 
 * Suporte ao WooCommerce é opcional, basta remover 
 * o comentário da linha 23.
*/ 
  
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', [
	'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
    ] );
// add_theme_support( 'woocommerce' );

// Desabilita o editor de blocos.
remove_theme_support( 'widgets-block-editor' );
add_filter('use_block_editor_for_post', '__return_false');

register_nav_menus( [
    'primary' => 'Menu Principal',
    // Adicione outros menus aqui.
] );

// Registra e carrega o arquivo CSS do tema.
function elementor_start_setup() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}
add_action( 'after_setup_theme', 'elementor_start_setup' );

?>
