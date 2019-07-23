<?php
/* The sidebar containing the secondary widget area */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<section id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</section><!-- #tertiary -->
<?php endif; ?>