<?php
/* The template for displaying 404 pages (Not Found) */

get_header(); ?>

		<section class="section page-header">
			<header class="banner" style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg'); background-size: cover; background-position:bottom;">
				<div class="feature-bg"></div>
				<div class="header-text col left-col">
					<h1 class="page-title">Oops..</h1>
				</div>
				<!-- <div class="header-text col right-col">
					<p>We're not sure what has happened here but we can't find this page.</p>
				</div> -->
			</header><!-- .banner -->
		</section><!-- .page-header -->
						

		<section class="section" id="page-404">
			<div class="spread">
				<div class="wrapper section-header">
						<h3><?php _e( 'We are not quite sure what happened there but we can’t find this page. Sorry about that. But here is a jar of dirt, oh and a search bar.', 'lucidica' ); ?></h3>
						<img class="error404" src="/wp-content/themes/lucidica/img/404.jpg" alt="404 error">
						<?php get_search_form(); ?>
				</div><!-- .section-header -->

				<div class="wrapper section-content">
				</div><!-- .section-content -->

			</div><!-- .spread -->
		</section><!-- #page-404 -->

<?php get_footer(); ?>