
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php the_title(); ?></h1>
        <div class="byline">
            <?php esc_html_e( 'Author:' ); the_author(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <!-- Uncomment the if statement to turn comments off completely (also has to be turned off in Admin > Edit Post, deselect Discussion > Allow Comments checkbox) -->
    <?php
        //if( comments_open() ) :

            comments_template();

        //endif;
    ?>
</article>