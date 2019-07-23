<?php
/* The main blog template file used for displaying a custom layout for the first page and simplified layout from page 2 */

get_header(); ?>

    <section class="section page-header">
        <header class="banner"
                style="background-image: url('https://www.lucidica.co.uk/wp-content/uploads/2017/11/bg-tech.jpg');">
            <div class="feature-bg"></div>
            <div class="header-text col left-col">
                <h1 class="page-title"><span class="lucidica">Lucidica</span> Tech Help</h1>
            </div>
            <div class="header-text col right-col">
                <p>Welcome to our tech help minisite addressing some common IT problems. We have split up the help
                    articles into 4 categories. Have a browse below!</p>
            </div>
        </header><!-- .banner -->
    </section><!-- .page-header -->

    <section class="section" id="tech-help-posts">
        <div class="spread">
            <div class="wrapper section-header">
                <?php wp_nav_menu(array('menu' => 'Help Topics')); // Do not fall back to first non-empty menu. ?>
            </div>
            <div class="wrapper section-content">
                <div class="tiles tech-help">
                    <?php
                    $excluded_tech_help = [];
                    /* The most recent 'Operating Systems' category post */
                    $args = array(
                        'post_type' => 'tech_help',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'help_topics',
                                'field'    => 'id', //can be set to slug
                                'terms'    => '352'
                            )
                        ),
                        'showposts' => 1
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                    $excluded_tech_help[] = get_the_ID();
                        ?>
                        <div class="tile help-post">
                            <h4 class="category-title small">Latest in Operating Systems:</h4>
                            <?php get_template_part('content', 'tile'); ?>
                        </div><!-- .tile -->
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                    <?php
                    /* The most recent 'Software' category post */
                    $args = array(
                        'post_type' => 'tech_help',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'help_topics',
                                'field'    => 'id', //can be set to slug
                                'terms'    => '351'
                            )
                        ),
                        'showposts' => 1
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        $excluded_tech_help[] = get_the_ID();
                        ?>
                        <div class="tile help-post">
                            <h4 class="category-title small">Latest in Software:</h4>
                            <?php get_template_part('content', 'tile'); ?>
                        </div><!-- .tile -->
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                    <?php
                    /* The most recent 'Hardware' category post */
                    $args = array(
                        'post_type' => 'tech_help',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'help_topics',
                                'field'    => 'id', //can be set to slug
                                'terms'    => '350'
                            )
                        ),
                        'showposts' => 1
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        $excluded_tech_help[] = get_the_ID();
                        ?>
                        <div class="tile help-post">
                            <h4 class="category-title small">Latest in Hardware:</h4>
                            <?php get_template_part('content', 'tile'); ?>
                        </div><!-- .tile -->
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                    <?php
                    /* The most recent 'Network' category post */
                    $args = array(
                        'post_type' => 'tech_help',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'help_topics',
                                'field'    => 'id', //can be set to slug
                                'terms'    => '344'
                            )
                        ),
                        'showposts' => 1
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        $excluded_tech_help[] = get_the_ID();
                        ?>
                        <div class="tile help-post">
                            <h4 class="category-title small">Latest in Network:</h4>
                            <?php get_template_part('content', 'tile'); ?>
                        </div><!-- .tile -->
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                        <h3 style="text-align: center;background: #1a1a1a;color: #FFFFFF;border-bottom: 6px solid #ff4000;">ALL TECH HELP POSTS</h3>
                    <?php

                    /* All other blog posts without feature image */
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('post_type' => 'tech_help', 'posts_per_page' => 12, 'paged' => $paged, 'post__not_in' => $excluded_tech_help);
                    global $wp_query;
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) :
                        /* The Loop */
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>

                            <div class="tile <?php echo 'col-' . $wp_query->current_post ?>">
                                <?php get_template_part('content','tile'); ?>
                            </div><!-- .tile -->

                        <?php endwhile; ?>

                    <?php endif; ?>

                    <?php lucidica_paging_nav(); ?>

                </div><!-- .tiles -->

            </div><!-- .wrapper -->
        </div><!-- .spread -->
    </section><!-- .section -->

<?php get_footer(); ?>