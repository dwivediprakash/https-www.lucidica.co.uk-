<?php
/* Template Name: About Us  */

get_header(); ?>

		<section class="section page-header">
			<div class="spread image" style="background-image: url('https://www.lucidica.co.uk/wp-content/themes/lucidica/img/bg-page-about-us.jpg')">
				<div class="wrapper section-header">
					<div class="header-block">
						<div class="header-bg"></div>
						<div class="header-text">
							<h1 class="page-title">About Us</h1>
							<p>Lucidica is made up of a team of experienced IT engineers and support staff based in London & Kiev, offering a fun, friendly approach to IT support for small to medium sized businesses.</p>
						</div>
					</div>
				</div>

				<div class="wrapper section-content">
					<div class="column two-col left">
						<p>We started small ourselves – as a one-man-band, when founder Thomas Jeffs began helping businesses in London with computer support. Thomas discovered he loved empowering businesses through technology, and turned his passion into a business.</p>
						<p>Since then, we've built on Thomas' philosophy of fun, friendly and reliable IT support in London to help over 500 businesses to get the most out of their technology. We are growing and constantly expanding to different areas and services.</p>
					</div>
					<div class="column two-col right">
						<h3 class="light">Want to know even more about Lucidica?</h3>
						<a class="link-label" href="/contact-us" title="Contact Lucidica">Get in touch with us</a>
					</div>
				</div>
			</div>
		</section><!-- end section#intro -->

		<section class="section" id="our-team">
			<div class="spread bg-light-grey txt-dark-blue">
				<div class="wrapper section-header">
					<div class="title-block">
						<h2 class="section-title">The Team</h2>
						<h4 class="section-sub">Check out our team profiles so you know who is who and also the faces behind the names.</h4>
					</div>
				</div>

				<div class="wrapper section-content team">


<?php
	$query = new WP_Query( array( 
		'post_type' => 'team',
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'asc',
		'posts_per_page' => '-1'
	) );

	if ( $query->have_posts() ) : ?>
	
	<?php while ( $query->have_posts() ) : $query->the_post();   
	$attachment_id1 = get_field('photo');
	$attachment_id2 = get_field('inspiration_image');
	$size = "profile-pic";
	$image1 = wp_get_attachment_image_src( $attachment_id1, $size );
?>
						<div class="team-member">
							<div class="scaled-image">
								<img src="<?php echo $image1[0]; ?>" alt="Team member <?php the_title(); ?>" />
							</div>
							<div class="profile-meta">
								<h5 class="member-name"><?php the_title(); ?></h5>
								<h6 class="job-title"><?php the_field('job_title'); ?></h6>
								<div class="actions">
									<a class="modal-link" href="<?php the_permalink(); ?>">Read profile</a>
									<?php if( get_field('team_email') ): ?><a class="" href="mailto:<?php the_field('team_email'); ?>">Email</a><?php endif; ?>
								</div>
							</div><!-- .profile-meta -->
							<div class="clear"></div>
						</div><!-- .team-member -->
	<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>


					<div class="clear"></div>

	  		</div><!-- end div.wrapper -->
			</div><!-- end div.spread -->
		</section><!-- end section#team -->

		<section class="section" id="partners">
			<div class="spread white txt-dark-blue">
      	<div class="wrapper section-header">
					<div class="title-block">
						<h2 class="section-title">Partners &amp; Friends</h2>
						<h4 class="section-sub">Since Lucidica started, we have been getting to know other businesses and making friends in London. We are certain we couldn't have got to where we are without a little help from these friends.</h4>
					</div>
				</div>

				<div class="wrapper section-content">
					<h3 class="section-item-title">Our Service Partners:</h3>
					
<?php
	$query = new WP_Query( array( 
		'post_type' => 'partner',
    'tax_query' => array(
        array(
            'taxonomy' => 'partner_types',
            'field' => 'id', //can be set to slug
            'terms' => '320'
        )
    ),
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'asc',
		'posts_per_page' => '-1'
	) );

	if ( $query->have_posts() ) : ?>
	
	<?php while ( $query->have_posts() ) : $query->the_post();   
	$attachment_id1 = get_field('logo');
	$size = "profile-pic";
	$image1 = wp_get_attachment_image_src( $attachment_id1, $size );
?>
						<div class="tile partner">
							<div class="scaled-image">
								<?php if ( get_field('partner_website') ) { ?>
								<a href="<?php the_field('partner_website'); ?>" title="Visit the <?php the_title(); ?> website"><img src="<?php echo $image1[0]; ?>" /></a>
								<?php } else { ?>
								<img src="<?php echo $image1[0]; ?>" />
								<?php } ?>
							</div>
							<h3 class="item-title"><?php the_title(); ?></h3>
							
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

						</div><!-- .tile.partner -->
	<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>


					<h3 class="section-item-title">Our Professional Friend Network:</h3>

<?php
	$query = new WP_Query( array( 
		'post_type' => 'partner',
    'tax_query' => array(
        array(
            'taxonomy' => 'partner_types',
            'field' => 'id',
            'terms' => '321'
        )
    ),
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'asc',
		'posts_per_page' => '-1'
	) );


	if ( $query->have_posts() ) : ?>
	
	<?php while ( $query->have_posts() ) : $query->the_post();   
	$attachment_id1 = get_field('logo');
	$size = "profile-pic";
	$image1 = wp_get_attachment_image_src( $attachment_id1, $size );
?>
						<div class="tile partner">
							<div class="scaled-image friend">
								<?php if ( get_field('partner_website') ) { ?>
								<a href="<?php the_field('partner_website'); ?>" title="Visit the <?php the_title(); ?> website"><img src="<?php echo $image1[0]; ?>" /></a>
								<?php } else { ?>
								<img src="<?php echo $image1[0]; ?>" />
								<?php } ?>
							</div>
							<h3 class="item-title"><?php the_title(); ?></h3>
							
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

						</div><!-- .tile.partner -->
	<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>


	  		</div><!-- end div.wrapper-->
	  	</div><!-- end div.spread -->
		</section><!-- end section#partners -->

		<section class="section" id="our-values">
			<div class="spread bg-light-blue txt-white">
				<div class="wrapper section-header">
					<div class="title-block">
						<h2 class="section-title">Our Values</h2>
					</div>
				</div>

				<div class="wrapper section-content">
					<div class="tile snippet">
						<h3 class="section-item-title">Keep Learning</h3>
						<img width="120" height="120" class="icon light-blue" alt="Keep Learning" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-learn-white.svg" />
						<p>We help our clients get the most out of their technology by constantly learning ourselves.</p>
					</div><!-- end div.tile -->

					<div class="tile snippet">
						<h3 class="section-item-title">Build the team</h3>
						<img width="120" height="120" class="icon light-blue" alt="Build the team" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-build-white.svg" />
						<p>We make sure we understand how you work. We also build great relationships between our own staff.</p>
					</div><!-- end div.tile -->

					<div class="tile snippet">
						<h3 class="section-item-title">Love Change</h3>
						<img width="120" height="120" class="icon light-blue" alt="Love change" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-change-white.svg" />
						<p>We see change as a positive and have built our business to adapt to it.</p>
					</div><!-- end div.tile -->

					<div class="tile snippet">
						<h3 class="section-item-title">Earn trust</h3>
						<img width="120" height="120" class="icon light-blue" alt="Earn trust" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-trust-white.svg" />
						<p>We're honest, and do what we say we will. We take responsibility for our work and constantly check its quality.</p>
					</div><!-- end div.tile -->

					<div class="tile snippet">
						<h3 class="section-item-title">Have fun</h3>
						<img width="120" height="120" class="icon light-blue" alt="Have fun" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-fun-white.svg" />
						<p>We like fun; it makes us happy! We build a fun environment to work in, and make sure we love what we do.</p>
					</div><!-- end div.tile -->

					<div class="tile snippet">
						<h3 class="section-item-title">Keep on growing</h3>
						<img width="120" height="120" class="icon light-blue" alt="Keep on growing" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-grow-white.svg" />
						<p>We help our clients build the foundations of their business and we work hard to grow Lucidica.</p>
					</div><!-- end div.tile -->

				</div><!-- end div.wrapper -->
	  	</div><!-- end div.spread -->
		</section><!-- end section#our-values -->

<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>