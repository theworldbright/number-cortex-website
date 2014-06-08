<?php
if (get_option('show_on_front') == 'posts') {
    get_template_part('index');
} elseif ('page' == get_option('show_on_front')) {

    get_header();
    ?>

    <div id="numberquartobanner">
        <div id="numberquartobannercontents">
            <div id="number_quarto_title"><img src="/images/number_quarto_title.png" alt="number quarto title" /></div>
            <div id="coming_soon"><img src="/images/coming_soon.png" alt="coming soon" /></div>
            <div id="number_quarto_app_phone"><img src="/images/number_quarto_on_iPhone_and_iPod_touch.png" alt="number quarto preview on iPhone and iPod touch" /></div>
        </div>
    </div>

    <div id="content" class="site-content container">
        <div id="primary" class="content-area col-sm-12 col-md-12">
            <main id="main" class="site-main" role="main">

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'dazzling'),
                                'after' => '</div>',
                            ));
                            ?>
                        </div><!-- .entry-content -->
                        <?php edit_post_link(__('Edit', 'dazzling'), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>'); ?>
                    </article><!-- #post-## -->

                    <?php get_sidebar('home'); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number()) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->


        <?php
        get_footer();
    }
    ?>