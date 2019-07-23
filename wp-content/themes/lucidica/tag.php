<?php
/* The template for displaying Blog Tag pages */

get_header(); ?>

		<section class="section page-header">
			<header class="banner" style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg');">
				<div class="feature-bg"></div>
				<div class="header-text col left-col">
					<h1 class="page-title"><?php printf( __( 'Tag %s', 'lucidica' ), single_tag_title( '', false ) ); ?></h1>
				</div>
				<div class="header-text col right-col">
					<?php if ( tag_description() ) : // Show an optional tag description ?>
					<?php echo tag_description(); ?>
					<?php endif; ?>
				</div>
			</header><!-- .banner -->
		</section><!-- .page-header -->

		<section class="section" id="tag-posts">
			<div class="spread">
				<div class="wrapper section-header">
					<?php dynamic_sidebar( 'sidebar-3' ); /* The Content Top Widget Area */ ?>
				</div>
				<div class="wrapper section-content">
					<?php if ( have_posts() ) : ?>
					<div class="tiles blog-tag">
					<?php while (have_posts()) : the_post(); /* All blog posts of a specific category */ ?>

    				<div class="tile <?php echo 'col-' . $wp_query->current_post ?>">
							<?php get_template_part( 'content', 'tile' ); ?>
						</div><!-- .tile -->

					<?php endwhile; ?>

					</div><!-- .tiles -->
					<?php lucidica_paging_nav(); ?>

					<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>

				</div><!-- .wrapper -->
			</div><!-- .spread -->
		</section><!-- .section -->

<?php get_footer(); ?>