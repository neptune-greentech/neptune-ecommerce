<?php
/**
 * Template pour la page page 1
 * Template Name: Modèle page 1
 */
get_header(); ?>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <?php the_content(); ?>

    <?php }
    } ?>

<?php get_footer(); ?>
