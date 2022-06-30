<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Neptune - Un thème Neptune E-commerce crée par Kairos Agency" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/images/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" media="print" href="/wp-content/themes/neptune/dist/styles/print.css">
    <title>Neptune - Site E-commerce</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="print">
      <p>E-neptune</p>
      <p>Ce site à été conçu selon des normes écologiques, il n'est donc pas prévu de l'imprimer. Veuillez vous rendre sur neptune-green.tech pour une meilleure expérience.</p>
    </div>

    <?php include_once locate_template('/components/bar.php');?>

	<header>
        <div class="container">

            <div class="header_top">
                <a class="logo" href="<?php echo bloginfo('url'); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-neptune.svg" alt="Logo.">
                </a>
                <?php if (is_active_sidebar('search_bar')) : ?>
                    <div id="header-widget-area" class="widget-area" role="complementary">
                        <?php dynamic_sidebar('search_bar'); ?>
                    </div>
                <?php endif; ?>
                <div class="icone_menu">
                    <a href="<?php echo bloginfo('url'); ?>/mon-compte/" class="compte">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/icone-compte.svg" alt="Icone compte.">
                    </a>
                    <a class="cart-custom panier" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><p><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/icone-panier.svg" alt="Icone panier.">
                    </a>
                </div>
            </div>

            <hr>
            
            <?php include_once locate_template('/components/nav.php'); ?>

        </div>
	</header>