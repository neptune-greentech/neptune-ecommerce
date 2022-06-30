<?php
get_header();
?>

<section class="block" >
    <div class="max-container">

        <div class="container">
            <?php
            while ( have_posts() ) :
                the_post(); ?>
                <div class="grid grid_1">
                    <div class="column column--12">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                </div>

                <div class="grid">
                    <div class="column column--12">

                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'test' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>

<?php
get_footer(); ?>


