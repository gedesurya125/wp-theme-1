<?php get_header( )?>
<?php 
  wp_enqueue_style( 
    'gs_front_page_style', 
    get_template_directory_uri().'/assets/css/front-page.css', 
    array()
  ); 
?>
  <main>
    <h1>This is the front page</h1>
    <section>
      <h2>Post list</h2>
      <ul>
        <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <li>
              <article>
                <h3><?php the_title(); ?></h3>
                <p>Posted in: <?php echo get_the_date()?></p>
                <p><?php  the_excerpt(); ?></p>
              </article>
            </li>
        <?php
          endwhile;
          else:
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
          endif;
        ?>
      </ul>
    </section>
  </main>
<?php get_footer() ?>