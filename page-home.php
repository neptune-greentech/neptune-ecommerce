<?php
/**
 * Template pour la page accueil
 * Template Name: Modèle accueil
 */
get_header(); ?>

<?php if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>

		<?php the_content(); ?>

<?php }
} ?>

<?php get_footer(); ?>