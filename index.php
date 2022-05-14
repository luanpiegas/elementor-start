<?php 

// Previne o acesso direto ao arquivo.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Funções básicas para o WordPress funcionar com
 * o Elementor. Nenhuma outra função é obrigatória.
*/

get_header();
wp_head();
the_content();
get_footer();
wp_footer();

?>
