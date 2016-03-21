<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wpprotik
 */

?>

	<?php if ( is_active_sidebar( 'footer_one' ) || is_active_sidebar( 'footer_tow' ) || is_active_sidebar( 'footer_three' )  ) : ?>

	<div class="container">
		<div class="row">
		<?php if ( is_active_sidebar( 'footer_one' ) ) { ?>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_one' ); ?>
			</div>
		<?php } ?>
			
		<?php if ( is_active_sidebar( 'footer_tow' ) ) { ?>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_tow' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer_three' ) ) { ?>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_three' ); ?>
			</div>
		<?php } ?>
		</div>
	</div>

	<?php endif; ?>
