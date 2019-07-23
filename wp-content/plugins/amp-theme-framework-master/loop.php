<?php
global $amp_homepage;
global $amp_post_page;
?>

<?php if($amp_homepage || is_page('our-services') || is_page('contact-us')): ?>
    <?php while(amp_loop('start')): ?>
            <?php amp_loop_title(); ?>
    <?php endwhile; wp_reset_postdata(); ?>
<?php elseif($amp_post_page): ?>
    <?php amp_pagination(); ?>
    <?php while(amp_loop('start')): ?>
		<div class="loop-post">
            <?php amp_loop_category(); ?>
            <?php amp_loop_image(); ?>
			<div class="loop-text">
                <?php amp_loop_title(); ?>
                <?php amp_loop_excerpt(); ?>
			</div>
		</div>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php amp_pagination(); ?>
<?php else: ?>
    <?php while(amp_loop('start')): ?>
		<div class="loop-post">
            <?php amp_loop_image(); ?>
            <?php amp_loop_title(); ?>
            <?php amp_loop_excerpt(); ?>
            <?php amp_loop_date(); ?>
		</div>
    <?php endwhile; amp_loop('end');  ?>
    <?php amp_pagination(); ?>
<?php endif; ?>
