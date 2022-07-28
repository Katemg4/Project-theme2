<?php
/**
 * Footer template
 *
 * The footer is applied to all pages.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */
?>

<!-- copyright section -->
    <footer class="container-fluid text-center py-4 mt-2 bg-light text-black">
        <div class="col-6 text-left">&copy; <?php echo get_theme_mod(
            'copyright_text',
            'Website Name 2022'
        ); ?></div>

<!-- customizer setting for icons -->
    <div class="col-6 text-right">
        <?php if (get_theme_mod('footer_fb_link', '') != ''): ?>
        <a href="<?php echo get_theme_mod(
            'footer_fb_link'
        ); ?>" target="_blank" class="btn-social-footer">
            <?php echo get_theme_mod('footer_social_icon_type', 0) == 0
                ? '<i class="fab fa-facebook-square"></i>'
                : '<i class="fab fa-facebook-f"></i>'; ?>
        </a>
        <?php endif; ?>

        <?php if (get_theme_mod('footer_ig_link', '') != ''): ?>
        <a href="<?php echo get_theme_mod(
            'footer_ig_link'
        ); ?>" target="_blank" class="btn-social-footer">
            <?php echo get_theme_mod('footer_social_icon_type', 0) == 0
                ? '<i class="fab fa-instagram-square"></i>'
                : '<i class="fab fa-instagram"></i>'; ?>
        </a>
        <?php endif; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/holder.js"></script>

    

  </body>
</html>