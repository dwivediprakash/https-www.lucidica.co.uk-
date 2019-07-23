<?php
/* The main blog template file used for displaying a custom layout for the first page and simplified layout from page 2 */

get_header(); ?>

    <section class="section page-header">
        <header class="banner"
                style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg');">
            <div class="feature-bg"></div>
            <div class="header-text col left-col">
                <h1 class="page-title">The <span class="lucidica">Lucidica</span> Blog</h1>
            </div>
            <div class="header-text col right-col">
                <p>Here we discuss anything relating to technology for small business. We regularly add new articles
                    written by members of our team.</p>
            </div>
        </header><!-- .banner -->
    </section><!-- .page-header -->

    <section class="section blog-archive">
    <div class="spread">
    <div class="wrapper section-content">
    <div class="tiles">

    <?php

    /* All other blog posts without feature image */
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('post_type' => 'post', 'posts_per_page' => 12, 'paged' => $paged);
    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        /* The Loop */
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>

            <div class="tile <?php echo 'col-' . $wp_query->current_post ?>">
                <?php get_template_part('content', 'tile'); ?>
            </div><!-- .tile -->

        <?php endwhile; ?>

    <?php endif; ?>

    <?php lucidica_paging_nav(); ?>

    </div><!-- .tiles -->

<?php dynamic_sidebar('sidebar-4'); ?>

    </div><!-- .wrapper -->
    </div><!-- .spread -->
    </section><!-- .section -->

<?php get_footer(); ?>