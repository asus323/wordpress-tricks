   <?php
$related = get_posts( 
  array( 'category__in' => wp_get_post_categories($post->ID), 
  'numberposts' => 6, 
  'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
  <!-- show post here -->
          <?php } wp_reset_postdata(); ?>