<section class="section__blogs banner__page" >
	<div class="max-container" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/src/images/banner_full.jpg')!important;">
        <div class="container">
            <div class="grid">
                <div class="column column--12">
					<?php $page = get_queried_object(); ?>
                    <p id="breadcrumbs">Accueil > Blog</p>
                    <h1><?php echo $page->post_title; ?></h1>
                    <div>
						<p><?php echo $page->post_content; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<div class="grid blog_item">

				<div class="column column--4">
					<?php the_post_thumbnail('large'); ?>
				</div>

				<div class="column column--8">
					<h2><?php the_title(); ?></h2>

					<?php the_excerpt(); ?>

					<ul class="blog_list">
						<li>
							<?php echo __('Publié le', 'neptune'); ?> <?php the_date(); ?>
						</li>
					</ul>

					<a class="btn__dark" href="<?php the_permalink(); ?>">
						<?php echo __('Lire cette article', 'neptune'); ?>
					</a>
				</div>

			</div>

			<?php // Display the posts seperator if this is not the last post of the loop
			if (($wp_query->current_post + 1) != $wp_query->post_count) : ?>
				<span class="separate"></span>
			<?php endif; ?>

		<?php endwhile; endif; ?>

		<div class="blog__pagination">
			<div class="blog__pagination__next">
				<?php next_posts_link( 'Previous posts' ); ?>
			</div>
			<div class="blog__pagination__prev">
				<?php previous_posts_link( 'Next posts' ); ?>
			</div>
		</div>


		<?php wp_reset_postdata(); ?>

    </div>
</section>
