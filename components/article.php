<?php get_header(); ?>

    <?php  while ( have_posts() ) : the_post(); ?>

        <section class="block" >
            <div class="max-container">
                <div class="container">

                    <p id="breadcrumbs">Accueil > Blog > Bonjour tout le monde !</p>

                    <h1><?php the_title(); ?></h1>
                    
                    <span class="category__post"><?php echo the_category() ?></span>

                    <div class="entry-content">

                        <div>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </div>

                        <?php the_content();
                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'test' ),
                                    'after'  => '</div>',
                                )
                            );
                        ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <?php include_once locate_template('/components/newsletter.php');?>

<?php get_footer(); ?>


