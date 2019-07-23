<?php amp_header(); ?>

<?php if (is_home()): ?>
<?php global $amp_post_page;
    $amp_post_page = true;?>
    <div class="blog-posts page-container">
        <section class="page-top-content">
        <div class="title">
            <div class="title-bg"></div>
            <h1>THE LUCIDICA BLOG</h1>
            <p>Here we discuss anything relating to technology for small business. We regularly add new articles written by members of our team.</p>
        </div>
    </section>
        <?php amp_loop_template(); ?>
    </div>
<?php endif; ?>
<?php amp_footer(); ?>