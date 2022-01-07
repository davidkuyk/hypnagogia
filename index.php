<?php
/*
*
* @package hypnagogia
*
*/
?>

<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="post-result-container">
    <?php the_post_thumbnail('thumbnail'); ?>
    <div class="post-result-content-container">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <?php wp_link_pages(); ?>
    </div>
  </div>

<?php endwhile; ?>

<?php
  if ( get_next_posts_link() ) {
    next_posts_link();
  }
?>
<?php
  if ( get_previous_posts_link() ) {
    previous_posts_link();
  }
?>

<?php else: ?>
  <p>No posts found. :(</p>
<?php endif; ?>

<?php get_footer();?>