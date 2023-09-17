<?php
// LIMPIAR WP_HEAD()
function limpiar_cabecera()
{
    // elimina emojis y sus js innecesarios
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    add_filter('emoji_svg_url', '__return_false');

    // quitar la barra de admin 
    add_filter('show_admin_bar', '__return_false');

    // quitar la meta de la versión de wordpress
    add_filter('the_generator', '__return_false');

    // si vas a usar solo el admin desde el dashboard
    remove_action('wp_head', 'rsd_link');

    // esto solo sirve para editar los post con windows live writer
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('after_setup_theme', 'limpiar_cabecera');

// Quitar los estilos predefinidos que carga WP
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library'); // los estilos de Guttenberg
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('global-styles-inline');
});

/* MENUS */
function register_my_menus()
{
    register_nav_menus(
        array(
            'main' => __('Menú principal superior'),
            'redes' => __('Menú de redes en el pie')
        )
    );
}
add_action('init', 'register_my_menus');


/* IMAGENES DESTACADAS */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); }


/* EXTRACTO */
function custom_excerpt_length( $length ) {
	return 13;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* LIBRERIA JQUERY */
function replace_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.0.min.js', false, NULL, true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'replace_jquery');



/* VINCULACION JS*/
function main_scripts() {
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
    wp_enqueue_script( 'bt5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_footer', 'main_scripts' );

//CAMBIAR NUMERO ENTRADAS COMER - comentado porque no funciona
/*function category_pagination(&$query) {
    if ( $query->is_category(2)  ) {
        $query->set('posts_per_page', 8);
    }
}
add_filter('pre_get_posts','category_pagination');*/