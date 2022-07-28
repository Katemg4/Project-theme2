<?php
/**
 * Sidebar template
 *
 * This is the sidebar template.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */
?>

<!-- Sidebar -->
<div class="container mt-5">
	<div class="row">
		<div class="col-6">
		<?php if (is_active_sidebar('left-foot-sidebar')): ?> 
			<div> 
				<?php dynamic_sidebar('left-foot-sidebar'); ?> 
			</div> 
			<?php endif; ?>
		</div>
		<div class="col-6">
			<?php if (is_active_sidebar('right-foot-sidebar')): ?> 
			<div> 
				<?php dynamic_sidebar('right-foot-sidebar'); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	
</div>