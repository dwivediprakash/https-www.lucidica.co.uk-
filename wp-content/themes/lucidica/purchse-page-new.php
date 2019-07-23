<!-- /var/www/html/wp-content/themes/lucidica/ -->
<style>
main{
	padding-bottom: 3%;
}
.asp_product_item{
	margin: auto;
}
h1.entry-title, h1.archive-title{
	margin: 30px 0;
}
	.entry-title{
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
	}
	.asp_product_name{
		text-align: center;
	}
	.asp_product_item_thumbnail img{
	width: 100%!important;
	height: 150px!important;
	}
	.asp_product_name{
		width: 100%;
	}
	.asp_product_description p{
		text-align: center;
		
	}
	.page .entry-content h3, .entry-content p{
		padding-left: 0!important;
	}
	.asp_product_item_amount_input_container{
		text-align: center;
	}
	#stripe_button_0{
		width: 50%;
		margin-left: 25%;
	}
</style>
<?php
/* Template Name: New Purchase Page  */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<header class="entry-header">
							<h1 class="entry-title"><span class="flag"><?php the_title(); ?></span></h1>
						</header><!-- .entry-header -->

						<?php the_content(); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'lucidica' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->


<!-- <div class="purchase_items">
	
</div> -->


					<footer class="entry-meta">
						
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->



<?php get_footer(); ?>