<?php
/* The template for displaying Search Results pages */

get_header(); ?>

		<section class="section page-header">
			<header class="banner" style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg'); background-size: cover;">
				<div class="feature-bg"></div>
				<div class="header-text col left-col">
						<h2 class="blog-name">Search Results</h2>
				</div>
				<div class="header-text col right-col">
						<p>You searched for <strong><?php echo get_search_query(); ?></strong>. Below is a list of what we found...</p>
				</div>
			</header><!-- .banner -->
		</section><!-- .page-header -->


		<section class="section tech-help">
			<div class="spread">
				<div class="wrapper section-content">

		<?php if ( have_posts() ) : ?>
					<div class="tiles">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="tile <?php echo 'col-' . $wp_query->current_post ?>">
				<?php get_template_part( 'content', 'tile' ); ?>
			</div><!-- .tile -->
			<?php endwhile; ?>

			<?php lucidica_paging_nav(); ?>

			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

					</div><!-- .tiles -->
				</div><!-- .wrapper -->
			</div><!-- .spread -->
		</section><!-- .section -->

<?php get_footer(); ?>