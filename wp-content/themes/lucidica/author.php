<?php
/* The template for displaying Author archive pages */

get_header(); ?>

		<section class="section page-header">
			<header class="banner" style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/pexels-photo-374631-sm.jpg'); background-position-y: top">
				<div class="feature-bg"></div>
				<div class="header-text col left-col">
					<h1 class="page-title">Posts by <?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?></h1>
				</div>
				<div class="header-text col right-col">
					<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<?php echo the_author_description(); ?>
					<?php endif; ?>
				</div>
			</header><!-- .banner -->
		</section><!-- .page-header -->

		<?php if ( have_posts() ) : ?>

			<?php
				/*
				 * Queue the first post, that way we know what author
				 * we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

		<section class="section" id="author-posts">
			<div class="spread">
				<div class="wrapper section-header">
					<?php
					/* The Content Top widget area */
					if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
					<?php endif; ?>
				</div>


			<?php
				/*
				 * Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>


				<div class="wrapper section-content">
					<div class="tiles author">
					<?php
					/* All blog posts of a specific author */
					while (have_posts()) : the_post();
					?>
    				<div class="tile author-post">
							<?php get_template_part( 'content', 'tile' ); ?>
						</div><!-- .tile -->

					<?php endwhile; ?>

					</div><!-- .tiles -->

					<div id="about-author">
						<div class="scaled-image">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php
								$user_id = get_the_author_meta('ID');
								$size = 'profile-pic';
								$imgURL = get_cupp_meta($user_id, $size);
								echo '<img src="'. $imgURL .'" alt="">';
?></a>
						</div>
						
						<div class="author-info">
							<h4 class="name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?></a></h4>
							<?php 
								$author_id = get_the_author_meta('ID');
								$job_title = get_field('user_job_title', 'user_'. $user_id);
?>
							<h6 class="job-title"><?php echo $job_title; ?></h6>
							<div class="desc"><?php echo the_author_description(); ?></div>
						</div><!-- .author-info -->
					</div><!-- #about-author -->


					<?php lucidica_paging_nav(); ?>

					<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div><!-- .wrapper -->
			</div><!-- .spread -->
		</section><!-- .section -->


<?php get_footer(); ?>