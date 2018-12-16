<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div class="content">
    <?php 
      // Create an array of post titles (doesn't have to be $post_titles, it could be an array of a bunch of different vegetables for e.g)
      $post_titles = [
        'Zebras can go fast',
        'Elephants can be friendly',
        'Monkeys can be dangerous'
      ];

      // Loop through the array of post titles
      foreach( $post_titles as $post_title ) {

        // Call a function to display the post titles (you have to create the function first, then call it. Which is down below - function display_posts( $title ), again, you don't have to use $title, you could use any name you want, its just that $title makes sense for this project)
        display_posts( $post_title ); 

      }

      // The function to display the post titles
      function display_posts( $title ) {

        echo "<h3>$title</h3>";

      }
      ?>
     
  </div>

  <div class="content">

    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <?php the_content(); ?>

    <?php endwhile; else: ?>

    <p><?php _e( 'Sorry, no content available!', 'wpcomzac' ) ?></p> 

    <?php endif; ?>

  </div>

</body>
</html>
