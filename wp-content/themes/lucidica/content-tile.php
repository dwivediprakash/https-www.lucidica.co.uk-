<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_page('recent-news')) { ?>
        <?php $title = get_the_title(); ?>
        <?php the_post_thumbnail('blog-tile', array('class' => 'blog-img', 'alt' => $title)); ?>
    <?php }; ?>
    <header class="entry-header">
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h3>

        <div class="entry-meta">
            <?php //lucidica_entry_date(); ?>
            <?php lucidica_entry_author(); ?>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
        <div class="entry-meta">
            <?php lucidica_entry_meta(); ?>
            <?php edit_post_link(__('Edit', 'lucidica'), '<span class="edit-link">', '</span>'); ?>
        </div><!-- .entry-meta -->
    </footer><!-- .entry-meta -->
</article><!-- #post -->
