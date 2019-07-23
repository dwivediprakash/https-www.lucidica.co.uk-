<?php
  /* Template Name: About Us Updated */

  get_header(); ?>
  <link rel="stylesheet" href="https://www.lucidica.co.uk/wp-content/themes/lucidica/css/about-us.css">

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

<!--      <div class="wrapper section-content team">-->
<!--        --><?php
//          $query = new WP_Query( array(
//              'post_type' => 'team',
//              'post_status' => 'publish',
//              'orderby' => 'date',
//              'order' => 'asc',
//              'posts_per_page' => '-1'
//          ) );
//
//          if ( $query->have_posts() ) : ?>
<!---->
<!--            --><?php //while ( $query->have_posts() ) : $query->the_post();
//              $attachment_id1 = get_field('photo');
//              $attachment_id2 = get_field('inspiration_image');
//              $size = "profile-pic";
//              $image1 = wp_get_attachment_image_src( $attachment_id1, $size );
//              ?>
<!--              <div class="team-member">-->
<!--                <div class="scaled-image">-->
<!--                  <img src="--><?php //echo $image1[0]; ?><!--" alt="Team member --><?php //the_title(); ?><!--" />-->
<!--                </div>-->
<!--                <div class="profile-meta">-->
<!--                  <h5 class="member-name">--><?php //the_title(); ?><!--</h5>-->
<!--                  <h6 class="job-title">--><?php //the_field('job_title'); ?><!--</h6>-->
<!--                  <div class="actions">-->
<!--                    <a class="modal-link" href="--><?php //the_permalink(); ?><!--">Read profile</a>-->
<!--                    --><?php //if( get_field('team_email') ): ?><!--<a class="" href="mailto:--><?php //the_field('team_email'); ?><!--">Email</a>--><?php //endif; ?>
<!--                  </div>-->
<!--                </div><!-- .profile-meta -->
<!--                <div class="clear"></div>-->
<!--              </div><!-- .team-member -->
<!--            --><?php //endwhile; wp_reset_postdata(); ?>
<!--          --><?php //else : ?>
<!--            <!-- show 404 error here -->
<!--          --><?php //endif; ?>
<!---->
<!---->
<!--        <div class="clear"></div>-->
<!---->
<!--      </div>-->
      <!-- end div.wrapper -->
<!--   Test   -->
      <div class="p-4">
        <div class="mb-4">
          <p class="dn">this pen uses <a target="__blank" href="https://github.com/aholachek/animate-css-grid">animate-css-grid</a>
          </p>
          <p class="dn">
            If you use React, you might want to try out <a href="https://github.com/aholachek/react-flip-toolkit" target="__blank">react-flip-toolkit</a>
          </p>
          <button class="btn js-toggle-grid-gap dn">toggle <code>grid-gap</code></button>
          <button class="btn js-toggle-grid-columns dn">toggle <code>grid-template-columns</code></button>

          <p class="dn">click a card to toggle the <code>grid-column</code> and <code>grid-row </code>properties on the card</p>
        </div>

<!--        <div class="grid grid--full mb-4">-->
<!--          <div class="card">-->
<!--            <div>-->
<!--              <!--<img src="blueberry.jpg" class="card__img">-->
<!--              <img src="https://images.unsplash.com/photo-1542822223-606661cf0a48?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjF9" class="card__img">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="card">-->
<!--            <div class="card--wrap">-->
<!--              <img src="blueberry.jpg" class="card__img">-->
<!--              <div class="text-wrap">-->
<!--                <div class="name">name</div>-->
<!--                <div class="position">position</div>-->
<!--                <div class="card--links">-->
<!--                  <div class="profile"><a href="#">Read profile</a> </div>-->
<!--                  <div class="email"><a href="mailto:">Email</a></div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
        <div class="grid grid--full mb-4 grid--big-gap">
          <?php
            $query2 = new WP_Query( array(
                'post_type' => 'team',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'asc',
                'posts_per_page' => '-1'
            ) );

            if ( $query2->have_posts() ) : ?>

          <?php while ( $query2->have_posts() ) : $query2->the_post();
            $attachment_id1 = get_field('photo');
            $attachment_id2 = get_field('inspiration_image');
//            $size = "profile-pic";
            $size = "large";
            $image1 = wp_get_attachment_image_src( $attachment_id1, $size );
          ?>
          <div class="card" >
            <div class="card--wrap">
<!--              <img src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/blueberry.jpg" class="card__img">-->
              <img src="<?php echo $image1[0]; ?>" alt="Team member <?php the_title(); ?>" class="card__img"/>
              <div class="text-wrap">
                <div class="name"><?php the_title(); ?></div>
                <div class="position"><?php the_field('job_title'); ?></div>
                <div class="card--links">
                  <div class="profile"><a href="<?php the_permalink(); ?>">Read profile</a> </div>
                  <div class="email"><?php if( get_field('team_email') ): ?><a class="" href="mailto:<?php the_field('team_email'); ?>">Email</a><?php endif; ?></div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
<!--        <button class="btn js-add-card">add a card</button>-->
      </div>
<!--   END Test   -->
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
  <script src="https://www.lucidica.co.uk/wp-content/themes/lucidica/js/animate-css-grid.js"></script>

  <script>
    //window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
    const grid = document.querySelector(".grid");

    // event handler to toggle grid sizing
    document
      .querySelector(".js-toggle-grid-columns")
      .addEventListener("click", () => grid.classList.toggle("grid--big-columns"));

    document
      .querySelector(".js-toggle-grid-gap")
      .addEventListener("click", () => grid.classList.toggle("grid--big-gap"));

    const addCard = () => {
      return fetch(
        `https://source.unsplash.com/random/${Math.floor(
          Math.random() * 1000
        )}`
      ).then(response => {
        grid.insertAdjacentHTML(
          "beforeend",
          `
    `
        );
      }, ()=> {});
    };

    // event handler to add a new card
    // document.querySelector(".js-add-card").addEventListener("click", addCard);

    // event handler to toggle card size on click
    grid.addEventListener("click", ev => {
      let target = ev.target;
      while (target.tagName !== "HTML") {
        if (target.classList.contains("card")) {
          target.classList.toggle("card--expanded");
          return;
        }
        target = target.parentElement;
      }
    });

    Promise.all([...Array(10).keys()].map(addCard)).then(() => {
      animateCSSGrid.wrapGrid(grid, { duration: 300, stagger: 10 });
    });

  </script>
<?php get_footer(); ?>