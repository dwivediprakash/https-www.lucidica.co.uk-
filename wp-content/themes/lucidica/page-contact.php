<?php
/* Template Name: Contact Us  */

get_header(); ?>

		<section class="section page-header">
			<div class="spread image" style="background-image: url('https://www.lucidica.co.uk/wp-content/themes/lucidica/img/bg-page-contact-us.jpg')">
				<div class="wrapper section-header">
					<div class="header-block">
						<div class="header-bg"></div>
						<div class="header-text">
							<h1>Contact Us</h1>
							<p>We look forward to hearing from you!</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section bg-dark-blue txt-white">
				<div class="wrapper section-content">

					<div class="tile">
						<object width="120" height="120" class="light-blue" data="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-phone.svg"></object>
						<h3 class="section-item-title">Phone</h3>
						<h4><a href="tel:02070426310">0207 042 6310</a></h4>
					</div><!-- end div.tile -->


					<div class="tile">
						<object width="120" height="120" class="light-blue" data="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-email.svg"></object>
						<h3 class="section-item-title">Email</h3>
						<h4><a href="mailto:service@lucidica.com">service@lucidica.com</a></h4>
					</div><!-- end div.tile -->


					<div class="tile">
						<object width="120" height="120" class="light-blue" data="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-location.svg"></object>
						<h3 class="section-item-title">Location</h3>
						<h4>35 Kingsland Road<br>
						Shoreditch<br>
						London E2 8AA, UK</h4>
					</div><!-- end div.tile -->


					<div class="clear"></div>
				</div>
			</div>
		</section><!-- end section -->

		<section class="section">
			<div class="spread txt-dark-blue">

      	<div class="wrapper section-header">
					<div class="title-block">
						<h2 class="section-title">Leave us your info</h2>
						<h4 class="section-sub">And we'll get back to you!</h4>
					</div>
				</div>

				<div class="wrapper section-content">

<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
<?php endwhile; ?>

				</div><!-- end div.wrapper -->
	  	</div><!-- end div.spread -->
		</section><!-- end section -->

		<section class="section">
			<div class="spread bg-dark-grey">

      	<div class="wrapper section-header">
					<div class="title-block">
						<h4 class="section-sub">Alternatively, get a quote emailed to you by filling out our online quotation form:</h4>
					</div>
				</div>

				<div class="wrapper section-content">

						<h3 class="txt-orange"><a class="link-label" href="/quote-form" title="Get a Quotation">Go to the Quote Form</a></h3>

					<div class="clear"></div>
				</div>
			</div>
		</section><!-- end section -->

		<section class="section">
			<div class="spread">
				<div class="google-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.1347040461387!2d-0.08007824815310824!3d51.52908911683753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cbbb8ccc2a9%3A0xa15332fd5f2efde8!2sLucidica+-+IT+Support+London!5e0!3m2!1sen!2sno!4v1511772564196" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</section><!-- end section -->

<!-- Tracking contact form submitting -->
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo get_permalink(7787); ?>';
}, false );
</script>

<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>