<?php get_header( )?>
  <main>
    <section>Hero</section>
    <section>Services</section>
    <section>Blog</section>
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