<?php include_once locate_template('/components/reassurance.php');?>

<footer>
    <div class="max-container">
        <div class="container">
            <div class="grid">
                <div class="column column--4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-neptune-dark.svg" alt="Logo.">
                </div>
                <div class="column column--4">
                    <h3>Neptune E-commerce</h3>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'menu principal',
                                'container' => 'ul',
                                'container_class' => '',
                                'items_wrap' => '<ul>%3$s</ul>'
                            )
                        );
                    ?>
                </div>
                <div class="column column--4">
                    <h3>Informations</h3>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'secondary_menu',
                                'container' => 'ul',
                                'container_class' => '',
                                'items_wrap' => '<ul>%3$s</ul>'
                            )
                        );
                    ?>
                </div>
                <div class="column column--4">
                    <h3>Service client</h3>
                    <?php
                        if(is_active_sidebar('footer-sidebar-1')){
                        dynamic_sidebar('footer-sidebar-1');
                        }
                    ?>
                </div>
            </div>
            <div class="grid">
                <div class="column column--12 social">
                    <ul>
                        <?php if(get_theme_mod('neptune_social_facebook')) :?>
                            <li>
                                <a rel="noopener" target="_blank" href="<?php echo esc_url(get_theme_mod('neptune_social_facebook')); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/facebook.svg" alt="Icone facebook.">
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('neptune_social_instagram')) :?>    
                        <li>
                            <a rel="noopener" target="_blank" href="<?php echo esc_url(get_theme_mod('neptune_social_instagram')); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/instagram.svg" alt="Icone Instagram.">
                            </a>
                        </li>
                        <?php endif; ?> 
                        <?php if(get_theme_mod('neptune_social_linkedin')) :?>       
                        <li>
                            <a rel="noopener" target="_blank" href="<?php echo esc_url(get_theme_mod('neptune_social_linkedin')); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/linkedin.svg" alt="Icone Pinterest.">
                            </a>
                        </li>
                        <?php endif; ?> 
                    </ul>
                </div> 
            </div> 
        </div>
    </div>
</footer>

<div class="min__footer">
    <p>© 2021 Neptune. By Kairos-agency. Tous droits réservés</p>
</div>

<?php wp_footer() ?>

</body>
</html>