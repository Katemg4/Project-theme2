<?php
/**
 * Contact page template
 *
 * The template is applied to the Contact page.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */
?>

<?php get_header(); ?>
<div class="container">
   
	
<div class="mt-5">
  <?php if (have_posts()):
      while (have_posts()):
          the_post(); ?>
    <div class="col-12">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
  <?php
      endwhile;
  else:
       ?> 
    <p><?php _e('No posts'); ?></p>
  <?php
  endif; ?>
</div>
</div>
<br>
<hr>

</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
