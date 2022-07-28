<?php
/**
	 * Page template
	 * 
	 * Page template for Home and About.
	 * 
	 *  * @link URL
	 *
	 * @package WordPress
	 * @subpackage happyhealthylife
	 * @since happyhealthylife v1.0
	 */
?>


<?php get_header(); ?>



 <!-- carousel -->
 <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sloppyjoe.png" class="d-block w-100  " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Vegan Sloppy Joe</h5>
            <p>Sassy sweet tomato-y sloppy joes made using tempeh. Protein-rich and speedy to make!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fusilli.jpg" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fusilli with Pesto and Crispy Vegan Bacon</h5>
            <p>Simple and flavorful, this protein-packed pasta pairs basil-scented sauce, aka pesto, with crispy, smoky vegan bacon. Fusilli spirals pair with the pesto beautifully to absorb all the sauce and add-ins. Greens to accent.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/salad.jpg" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>California Spring Market Salad</h5>
            <p>This colorful salad is inspired by all the bounty of a spring farmer's market in California. Maple-mustard dressing and a combo of fruit, veggies, optional skillet beans and healthy fats. Candied nuts offer a unique sweet and savory crunch.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



<div class="container">
   
<title>
 <?php if (is_front_page()) {
     echo 'Welcome to ';
     bloginfo('name');
 } else {
     echo wp_title();
 } ?>
</title>

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
<br>
<hr>
</div>


</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
