<?php get_header(); ?>
<h2>News</h2>
<div class="container">
  <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile; endif; 
      ?>
  <div class='text-center'>
  <?php
  global $wp_query;
  
  $big = 999999999; // need an unlikely integer
  
  echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
  ) );
  ?>
  </div>
</div>

