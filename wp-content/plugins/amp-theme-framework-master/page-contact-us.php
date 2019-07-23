<?php
/**
 * Created by PhpStorm.
 * User: lykhachov
 * Date: 6/25/18
 * Time: 10:50 AM
 */ ?>

<?php amp_header(); ?>
<div class="contact-us page-container">
	<section class="page-top-content">
		<div class="title">
			<div class="title-bg"></div>
			<h1>CONTACT US</h1>
			<p>We look forward to hearing from you!</p>
		</div>
	</section>
	<section class="services-list">
		<div class="services-list__service">
			<amp-img src="/wp-content/themes/lucidica/img/icon-phone.svg" width="100" height="100" alt="IT SUPPORT CONTRACTS" layout="responsive" class="service__img"></amp-img>
			<h2 class="service__title">IT SUPPORT CONTRACTS</h2>
			<a href="tel:0207 042 6310">0207 042 6310</a>
		</div>
		<div class="services-list__service">
			<amp-img src="/wp-content/themes/lucidica/img/icon-email.svg" width="100" height="100" alt="IT SUPPORT CONTRACTS" layout="responsive" class="service__img"></amp-img>
			<h2 class="service__title">EMAIL</h2>
			<a href="mailto:SERVICE@LUCIDICA.COM">SERVICE@LUCIDICA.COM</a>
		</div>
		<div class="services-list__service">
			<amp-img src="/wp-content/themes/lucidica/img/icon-location.svg" width="100" height="100" alt="IT SUPPORT CONTRACTS" layout="responsive" class="service__img"></amp-img>
			<h2 class="service__title">LOCATION</h2>
			<a href="https://www.google.com/maps/place/Shoreditch+Building,+35+Kingsland+Rd,+Hackney,+London+E2+8AA,+Великобритания/@51.5282647,-0.0791515,916m/data=!3m1!1e3!4m5!3m4!1s0x48761cbbbc841443:0x4241045b95d3f158!8m2!3d51.5291508!4d-0.0785026">35 KINGSLAND ROAD<br>
				SHOREDITCH<br>
				LONDON E2 8AA, UK</a>
		</div>
	</section>
	<section class="leave-info">
		<h2>LEAVE US YOUR INFO</h2>
		<p>And we'll get back to you!</p>
		<a href="/contact-us/" class="button">CONTACT US</a>
	</section>
	<section class="quote-form-apply">
		<p>Alternatively, get a quote emailed to you by filling out our online quotation form:</p>
		<a href="/quote-form" class="button orange">Go to the Quote Form</a>
	</section>
	<section class="blog">
		<div class="section-title">
			<h1>Latests posts</h1>
		</div>
		<div class="blog__posts">
			<h2>Tech help blog</h2>
            <?php global $amp_q;
            $amp_q = new WP_Query(array(
                'posts_per_page' => 1, 'post_type' => 'tech_help')); ?>
            <?php amp_loop_template(); ?>
		</div>
		<div class="blog__posts">
			<h2>Blog</h2>
            <?php global $amp_q;
            $amp_q = new WP_Query(array(
                'posts_per_page' => 1,)); ?>
            <?php amp_loop_template(); ?>
		</div>
	</section>
</div>
<?php amp_footer(); ?>
