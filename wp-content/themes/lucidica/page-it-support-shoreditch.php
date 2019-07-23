<?php
/* Template Name: It Support Shoreditch  */

get_header(); ?>

    <section class="section page-header">
        <div class="spread image"
             style="background-image: url('https://www.lucidica.co.uk/wp-content/themes/lucidica/img/it-support-shoreditch-small-business.png')">
            <div class="wrapper section-header">
                <div class="header-block">
                    <div class="header-bg"></div>
                    <div class="header-text">
                        <h1 class="page-title">IT Support Shoreditch</h1>

                    </div>
                </div>
            </div>

            <div class="wrapper section-content">
                <div class="column two-col left">
                    <p>As an IT company based in Shoreditch, it’s not surprising that we have a lot of clients based
                        just down the road. Our lovely office in Shoreditch is part of an Accelerator programme that
                        helps small businesses and start-ups grow and is a perfect setting for us to meet companies at
                        different stages of their companies life. We frequently invite prospects and clients to our
                        office in Shoreditch so they can see where it all happens and meet their account engineer.</p>

                </div>
                <div class="column two-col right">
                    <p>But why would you go for a local IT support company rather than one further away? Well, our
                        location means that if you have an emergency onsite or want a meeting or consultation we are
                        just around the corner and can pop in a lot easier than other companies. Also, many IT companies
                        charge travel costs and if your company is based locally than you are automatically removing
                        that cost! </p>
                    <h3 class="light">Want to request a quote?</h3>
                    <a class="link-label" href="#quote-form" title="Contact Lucidica">Get Bespoke Quote</a>
                </div>
            </div>
        </div>
    </section><!-- end section#intro -->

    <div class="wrapper section-content">
        <div class="section-item">
            <h2 class="section-item-title">Get the best Local IT Support</h2>
            <p>For small and medium sized businesses in Shoreditch, Lucidica offers the best bespoke IT solutions. We
                spend time finding out exactly what is important to your business, what problems you’ve had in the past
                and your busiest times. We tailor your contract to suit those needs and ensure that all engineers in the
                business understand those as well.</p>

        </div>


        <div class="section-item">
            <h2 class="section-item-title">What do we offer?</h2>
            <p>From IT support packages to Web Development, we offer packages bespoke for start-ups, creating an
                affordable solution that allow growth. Please see our services below:</p>

        </div>

    </div>
    <section class="section" id="our-values">
        <div class="spread bg-light-blue txt-white">
            <div class="wrapper section-header">
                <div class="title-block">
                    <h2 class="section-title">Our Services</h2>
                </div>
            </div>

            <div class="wrapper section-content">
                <div class="tile snippet">
                    <h3 class="section-item-title">IT Support Contracts</h3>
                    <img width="120" height="120" class="icon light-blue" alt="Keep Learning"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-it-support-white.png"/>
                    <p>We offer tailored IT support packages customised for your Shoreditch business.</p>
                </div><!-- end div.tile -->

                <div class="tile snippet">
                    <h3 class="section-item-title">Managed Services</h3>
                    <img width="120" height="120" class="icon light-blue" alt="Build the team"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-managed-services-white1.png"/>
                    <p>Purchase licensing and cloud services through us and improve your Shoreditch businesses
                        productivity and accessibility.</p>
                </div><!-- end div.tile -->

                <div class="tile snippet">
                    <h3 class="section-item-title">Product Purchasing &amp; Setup </h3>
                    <img width="120" height="120" class="icon light-blue" alt="Love change"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-products-white.png"/>
                    <p> Save time and money by letting us buy and set up products for you. We can advise, purchase and
                        prepare and install them in your Shoreditch business.</p>
                </div><!-- end div.tile -->

                <div class="tile snippet">
                    <h3 class="section-item-title">Web Hosting &amp; Development</h3>
                    <img width="120" height="120" class="icon light-blue" alt="Earn trust"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-hosting-development-white.png"/>
                    <p>You don’t have to hire an in-house web developer in your Shoreditch office or spend your time
                        learning how to do it. Make your website look and function like you want and get your customers
                        to come straight to you.</p>
                </div><!-- end div.tile -->

                <div class="tile snippet">
                    <h3 class="section-item-title">Sharepoint &amp; Crms</h3>
                    <img width="120" height="120" class="icon light-blue" alt="Have fun"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-crm-white.png"/>
                    <p>Create a bespoke portal which really caters to your Shoreditch business needs and helps everyone
                        access the details they need to do their job.</p>
                </div><!-- end div.tile -->

                <div class="tile snippet">
                    <h3 class="section-item-title">Digital Marketing</h3>
                    <img width="120" height="120" class="icon light-blue" alt="Keep on growing"
                         src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-digital-marketing-white.png"/>
                    <p>Let us tweet, post, blog for you and tick another job off the to do list! We will learn about
                        your small business, the branding and your “voice” and create marketing collateral that works
                        with that. </p>
                </div><!-- end div.tile -->

            </div><!-- end div.wrapper -->
        </div><!-- end div.spread -->
    </section><!-- end section#our-values -->

    <!--Certificates-->

    <div class="wrapper section-content">

        <h2 class="section-item-title">Our Certificates</h2>
        <p style="margin: 0 2.4%!important">Our certifications and partnerships are something we pride ourselves on and
            help us stand out from the crowd. We are a Microsoft Gold Partner, a Microsoft Certified Refurbisher and an
            Expert Partner of 2017 from our Microsoft suppliers. On top of this we are an Apple reseller and a Dropbox
            Business partner. Security wise, we are certified in Cyber Essentials and work with Solarwinds to ensure
            your technology is up to date. Through partnerships we aim to reach our clients all over London and are part
            of London Met Accelerator and British Library Business and IP Centre. </p>

        <div class="home-partners">
            <?php
            $base_dir = trailingslashit(get_template_directory());
            $dir = 'img/homepage-partners/';
            $files = glob($base_dir . $dir . '*.{jpeg,jpg,png}', GLOB_BRACE);
            foreach ($files as $file) {
                ?>
                <div class="tile four-parts">
                    <img alt="partners"
                         src="https://<?php echo substr($file, 9); ?>"/>
                </div><!-- end div.tile -->
                <?php
            } ?>

        </div>

    </div>


    <!--Certificates ends-->

    <!-- Testimonials -->

    <section class="section" id="testimonials">
        <div class="spread bg-white txt-orange">
            <div class="wrapper section-header">
                <div class="title-block">
                    <h2 class="section-item-title">Testimonials</h2>
                    <p style="margin: 0 2.4%!important">
                        Here is a sneak preview of some of our lovely testimonials from our clients. To view more see
                        below. To see Google reviews from a whole host of people that we’ve been in contact with over
                        the years, <a
                                href="https://www.google.co.uk/search?q=lucidica&rlz=1C1CHBF_en-GBGB786GB786&oq=lucidica&aqs=chrome..69i57j69i60l5.2783j1j7&sourceid=chrome&ie=UTF-8#lrd=0x48761cbbb8ccc2a9:0xa15332fd5f2efde8,1,,,"
                                target="_blank">click here.</a> Want to hear from some of our clients based in
                        Shoreditch? Get in touch and we can put you in touch with them.
                    </p>
                </div>
            </div>

            <div class="wrapper section-content">

                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'testimonial',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'asc',
                    'posts_per_page' => '3'
                ));

                if ($query->have_posts()) : ?>

                    <?php while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="tile testimonial">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_field('ts_company'); ?></h4>
                            <blockquote><?php the_content(); ?></blockquote>
                        </div><!-- .tile.partner -->
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php else : ?>
                    <!-- show 404 error here -->
                <?php endif; ?>

                <h3 class="more-link"><span class="more-info">Hide</span> additional testimonials</h3>

                <div class="more-info">
                    <?php
                    $query = new WP_Query(array(
                        'post_type'      => 'testimonial',
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'asc',
                        'offset'         => 3,
                        'posts_per_page' => '20'
                    ));

                    if ($query->have_posts()) : ?>

                        <?php while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="tile testimonial">
                                <h3><?php the_title(); ?></h3>
                                <h4><?php the_field('ts_company'); ?></h4>
                                <blockquote><?php the_content(); ?></blockquote>
                            </div><!-- .tile.partner -->
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php else : ?>
                        <!-- show 404 error here -->
                    <?php endif; ?>

                </div><!-- end div.more-info -->

                <section class="section" style="margin-top: 40px;">
                    <div class="spread bg-light-grey">
                        <div class="wrapper section-content">

                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>

                        </div><!-- end div.wrapper -->
                    </div><!-- end div.spread -->
                </section><!-- end section -->

            </div><!-- end div.wrapper -->
        </div><!-- end div.spread -->
    </section><!-- end section#testimonials -->

    <!-- Testimonials ends -->


<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>