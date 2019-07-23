<?php
/* The template for displaying all single posts */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
			<?php 
				$attachment_id1 = get_field('photo');
				$attachment_id2 = get_field('inspiration_image');
				$size = "single-large";
				$image1 = wp_get_attachment_image_src( $attachment_id1, $size );
				$image2 = wp_get_attachment_image_src( $attachment_id2, $size );
			?>

		<section id="modal-ready" class="modal section team">
			<div class="wrapper section-header">
				<div class="header-text">
					<div class="scaled-image landscape">
						<img src="<?php echo $image1[0]; ?>" />
					</div>
					<h1><?php the_title(); ?></h1>
					<h4><?php the_field( 'job_title' ); ?></h4>
				</div>
			</div>

			<div id="primary" class="wrapper section-content">
				<?= get_the_content(); ?>
				<div class="scaled-image">
					<img src="<?php echo $image2[0]; ?>" />
				</div>

			</div><!-- #primary -->
		</section><!-- .section.team -->
	<?php endwhile; ?>

<?php get_footer(); ?>

