<?php
/*
 * Template name: Blog recent posts
 */
/* The main blog template file used for displaying a custom layout for the first page and simplified layout from page 2 */

get_header(); ?>

 <?php
    /* The most recent blog post as a full width feature*/
    $args = array('post_type' => 'post', 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

        <?php $bg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>

        <section class="section featured-post">
            <div class="feature" style="background-image: url('<?php echo $bg[0]; ?>');">
                <div class="feature-bg"></div>
                <div class="header-text col left-col">
                    <h1 class="page-title">The <span class="lucidica">Lucidica</span> Blog</h1>
                    <p>Here we discuss anything relating to technology for small business. We regularly add new articles
                        written by members of our team.</p>
                </div><!-- .left-col -->
                <div class="header-text col right-col">

                    <h4 class="latest"><span class="flag">Our latest post</span></h4>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="article-content">
                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title(); ?></h2>

                                <div class="entry-meta">
                                    <?php //lucidica_entry_date(); ?>
                                    <?php lucidica_entry_author(); ?>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-meta">
                                <?php lucidica_entry_meta(); ?>
                                <?php edit_post_link(__('Edit', 'lucidica'), '<span class="edit-link">', '</span>'); ?>
                            </footer><!-- .entry-meta -->
                        </div><!-- .article-content -->
                        <a class="link-label bg-orange" href="<?php the_permalink(); ?>" title="Read this blog post">Read
                            more...</a>
                    </article><!-- #post -->
                </div><!-- .right-col -->

            </div><!-- .feature -->
        </section><!-- .featured-post -->

    <?php
    endwhile;
    wp_reset_query();
    ?>

    <section class="section blog-summary">
    <div class="spread">
    <div class="wrapper section-content">
    <div class="tiles">

    <?php
    /* The most recent 'How-to-Guide' category post */
    $args = array('post_type' => 'post', 'cat' => 8, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>


    <?php
    /* The most recent 'Social Media' category post */
    $args = array('post_type' => 'post', 'cat' => 21, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>


    <?php
    /* The most recent 'Products' category post */
    $args = array('post_type' => 'post', 'cat' => 17, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>


    <?php
    /* The most recent 'Small Business' category post */
    $args = array('post_type' => 'post', 'cat' => 20, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>


    <?php
    /* The most recent 'Random Technology' category post */
    $args = array('post_type' => 'post', 'cat' => 18, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>


    <?php
    /* The most recent 'Internet & Security' category post */
    $args = array('post_type' => 'post', 'cat' => 101, 'showposts' => 1);
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        ?>
        <div class="tile blog-post">
            <h4 class="category-title"><span class="flag"><?php lucidica_entry_cat(); ?></span></h4>
            <?php get_template_part('content', 'tile'); ?>
        </div><!-- .tile -->
    <?php
    endwhile;
    wp_reset_query();
    ?>

        <div><p style="text-align: center;"><a href="/blog" class="link-label bg-orange">View all posts</a></p></div>
    </div><!-- .tiles -->

        <?php dynamic_sidebar('sidebar-4'); ?>

    </div><!-- .wrapper -->
    </div><!-- .spread -->
    </section><!-- .section -->

<?php get_footer(); ?>