<?php
/* The template for displaying all single posts */

get_header(); ?>

<?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<section class="section page-header">
			<div class="spread image" style="background-image: url('<?php echo $bg[0]; ?>'); background-size: contain; background-repeat: no-repeat;">
				<div class="wrapper section-header">
					<div class="header-block">
						<div class="header-bg"></div>
						<div class="header-text">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end section#intro -->


		<section class="section blog">
			<div class="spread white">
				<div id="primary" class="wrapper section-content">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

				</div><!-- #primary -->
			</div><!-- .spread -->
		</section><!-- .spread -->

	<section id="secondary" class="blog-sidebar single-blog-post-sidebar">
		<div class="sidebar-inner">
			<div class="widget-area">

				<div id="about-author">
					<div class="scaled-image">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php
							$user_id = get_the_author_meta('ID');
							$size = 'profile-pic';
							$imgURL = get_cupp_meta($user_id, $size);
							echo '<img src="'. $imgURL .'" alt="">';
?></a>
					</div>

					<h4 class="name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?></a></h4>
					<?php 
						$author_id = get_the_author_meta('ID');
						$job_title = get_field('user_job_title', 'user_'. $user_id);
?>
					<h6 class="job-title"><?php echo $job_title; ?></h6>
					<div class="desc"><?php echo the_author_description(); ?></div>
					<a class="read-more" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">Read More by <?php echo get_the_author_meta('first_name'); ?></a>
				</div>

				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</section><!-- #tertiary -->

<?php get_footer(); ?>