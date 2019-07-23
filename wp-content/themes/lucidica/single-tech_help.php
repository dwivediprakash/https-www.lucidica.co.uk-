<?php
/* The template for displaying all single posts */

get_header(); ?>

		<section class="section page-header">
			<header class="banner" style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg'); background-size: cover;">
				<div class="feature-bg"></div>
				<div class="header-text col left-col">
					<h1><?php the_title(); ?></h1>
				</div>
			</header><!-- .banner -->
		</section><!-- .page-header -->

		<section class="section tech-help">
			<div class="spread">
				<div class="wrapper section-content">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

				</div><!-- .wrapper -->
			</div><!-- .spread -->
		</section><!-- .section -->

		<section id="tertiary" class="blog-sidebar tech-help-sidebar" role="complementary">
			<div class="sidebar-inner">
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div><!-- .widget-area -->
			</div><!-- .sidebar-inner -->
		</section><!-- #tertiary -->

<?php get_footer(); ?>