<?php
/**
 * Post template
 *
 * The template is applied to all single post pages.
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
    <div class="m-4">
        <h1 class="text-center"><?php single_post_title(); ?> </h1>
    </div>
    <div class="d-flex justify-content-center">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large', ['class' => 'img-fluid']);
        } ?>

    </div>
    <p><?php the_content(); ?></p>
</div>
<?php get_footer(); ?>
