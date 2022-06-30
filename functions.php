<?php

include_once locate_template('/config/blog/index.php');

include_once locate_template('/config/clean/index.php');

include_once locate_template('/config/customizer/index.php');

include_once locate_template('/config/enqueue.php');

include_once locate_template('/config/editor/index.php');

include_once locate_template('/config/menus.php');

include_once locate_template('/config/theme_support.php');


/**  
 * Theme support woocommerce 
 **/
add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
} );


/**  
 * Add widget sidebar
 **/
function fete_shop_sibedar_init() {

	register_sidebar( array(
		'name'          => 'Sidebar boutique',
		'id'            => 'shop_sidebar',
		'before_widget' => '<div class="sidebar_product">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'fete_shop_sibedar_init' );


/**  
 * Add widget search
 **/
function search_bar_init()
{
    register_sidebar([
        'name' => 'search bar',
        'id' => 'search_bar',
        'before_widget' => '<div class="search">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ]);
}
add_action('widgets_init', 'search_bar_init');


/**  
 * Add widget footer
 **/
register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    ) );


/**  
 * Modified columns product
 **/
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
        if(is_front_page()){
            return 4;
        } else {
            return 3; 
        }
	}
}


/**  
 * Add Zoom product
 **/
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

function gallery_scripts() {
    if ( is_archive()) {
        if ( current_theme_supports( 'wc-product-gallery-zoom' ) ) {
            wp_enqueue_script( 'zoom' );
        }
        if ( current_theme_supports( 'wc-product-gallery-slider' ) ) {
            wp_enqueue_script( 'flexslider' );
        }
        if ( current_theme_supports( 'wc-product-gallery-lightbox' ) ) {
            wp_enqueue_script( 'photoswipe-ui-default' );
            wp_enqueue_style( 'photoswipe-default-skin' );
            add_action( 'wp_footer', 'woocommerce_photoswipe' );
        }
        wp_enqueue_script( 'wc-single-product' );
    }
}


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
        ob_start();
    ?>
        <a class="cart-custom panier" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
            <p><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/icone-panier.svg" alt="Icone panier.">
        </a>
    <?php
        $fragments['a.cart-custom.panier'] = ob_get_clean();
    return $fragments;
}