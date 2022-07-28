<?php
/**
 * Blog template
 *
 * The template is applied to the BLOG page.
 *
 * @link URL
 *
 * @package WordPressnd
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */
?>



<?php get_header(); ?>
<div class="container">
    <div class="row">       

        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <!-- wk7: set the bootstrap grid from the custom settings -->
                <div class="col-lg-<?php echo get_theme_mod(
                    'home_grid_size',
                    '6'
                ); ?> col-12">

                <div class="m-5">
                    <?php if (has_post_thumbnail()) {
                        // wk6: set a thumbnail size based on the grid size
                        $thumb_size =
                            get_theme_mod('home_grid_size', '6') == 12
                                ? 'full'
                                : 'medium';

                        the_post_thumbnail($thumb_size, [
                            'class' => 'img-fluid',
                        ]);
                    } else {
                        echo '<img class="img-fluid" src="' .
                            get_stylesheet_directory_uri() .
                            '/assets/images/no-image.png"> ';
                    } ?>
                </div>
                <a href="<?php echo get_permalink(); ?>">
                  <h1 class="mt-3" ><?php the_title(); ?></h1>
                </a>
                
                <?php if (get_theme_mod('show_post_date', true)): ?>
                    <h4><?php the_time('F jS, Y'); ?></h4> 
                <?php endif; ?>


                <p><?php the_excerpt(); ?></p>               

                <div class="text-right mb-5">
                    <a class="btn btn-primary" href="<?php echo get_permalink(); ?>">
                        See Recipe
                    </a>
                </div>
            </div>

        <?php
            endwhile;
        else:
             ?>

            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

        <?php
        endif; ?>

    </div>

    <hr>
    </div>

<?php get_footer(); ?>
