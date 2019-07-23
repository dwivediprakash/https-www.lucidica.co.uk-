<?php
/* Template Name: Quote Form  */

get_header(); ?>

		<section class="section page-header">
			<div class="spread image" style="background-image: url('https://www.lucidica.co.uk/wp-content/themes/lucidica/img/bg-page-quote.jpg')">
				<div class="wrapper section-header">
					<div class="header-block">
						<div class="header-bg"></div>
						<div class="header-text">
							<h1>Quote Form</h1>
							<p>Let us know a little more about your company.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="spread bg-light-grey">
				<div class="wrapper section-content">
					
<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
<?php endwhile; ?>

				</div><!-- end div.wrapper -->
	  	</div><!-- end div.spread -->
		</section><!-- end section -->

<!-- Tracking contact form submitting -->
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo get_permalink(7882); ?>';
}, false );
</script>

<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>