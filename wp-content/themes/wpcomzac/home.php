
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php wp_title( '' ); ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'posts' );

                endwhile; else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

            <?php echo paginate_links(); ?>

            <p>Template: home.php</p>

        </main>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>