<!DOCTYPE html>
<html lang="en-GB">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom-sharp.css" type="text/css"
	      media="all">


    <?php wp_head(); ?>
	<script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-110122862-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-110122862-1');
        gtag('config', 'AW-998796733', {
            'phone_conversion_number': '0207-042-6310',
            'phone_conversion_css_class': 'number'
        });
	</script>

</head>

<body onload="init()" <?php body_class(); ?>>
<?php
	$place = new Google_review('AIzaSyBttfmKHtNbcZ3_wEr8imdcpQl3s8Mgp-I', 'ChIJqcLMuLscdkgR6P0uX_0yU6E');
	$place_data = $place->get_json();
?>

<div itemscope itemtype="http://schema.org/AggregateRating" style="display: none;">
	<div itemprop="url">https://www.lucidica.co.uk</div>
	<div itemprop="itemReviewed">
		<div itemprop="name">Lucidica LTD</div>
	</div>
	<div itemprop="ratingValue"><?= $place_data->result->rating; ?></div>
	<div itemprop="ratingCount"><?= $place_data->result->user_ratings_total; ?></div>
</div>
<header id="masthead" class="navbar <?php if (is_front_page()) : ?>home<?php endif; ?>">
	<div class="wrapper">
		<h2 id="site-title">
			<a href="https://www.lucidica.co.uk" title="Home" rel="home">Lucidica | IT support London</a>
		</h2>
		<a href="https://www.lucidica.co.uk" title="Home" class="small-logo">IT Support London</a>

		<h3 class="menu-toggle"><span class="screen-reader-text"><?php _e('Main Menu', 'lucidica'); ?></span></h3>
		<nav id="site-navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'site-nav')); ?>
		</nav><!-- #site-navigation -->
	</div><!-- .wrapper -->
</header><!-- #masthead -->

<main id="main" class="site-main">
