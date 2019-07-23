<?php
  /* Template Name: Why Choose Us  */

  get_header(); ?>

  <style>
    .awards .awards-wrap {
      display: flex;
      align-items: center;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-bottom: 20px;
      padding: 0 5%;
    }

    .awards .awards-wrap .awards-row {
      text-align: center;
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 100%;
    }

    .awards .awards-wrap .award {
      width: 10%;
      margin-bottom: 20px;

    }

    .awards .awards-wrap .award img{
      width: 100%;
    }

    .awards .awards-wrap .svg-height {
      /*min-height: 200px;*/
    }

    .awards h3 {
      text-align: center;
      font-size: 55px;
      font-weight: 700;
      text-transform: uppercase;
    }

    @media (max-width: 600px) {
      .awards h3{
        font-size: 30px;
      }
      .awards .awards-wrap .awards-row {
        flex-direction: column;
      }

      .awards .awards-wrap .award {
        width: 50%;
        min-width: 140px;
      }

      .awards .awards-wrap .svg-height {
        min-height: auto;
      }

      .awards .awards-wrap .awards-row .margin {
        margin-left: 20px;
        max-height: 80px;
      }
    }
  </style>


  <section class="section page-header">
    <div class="spread image"
         style="background-image: url('https://www.lucidica.co.uk/wp-content/themes/lucidica/img/bg-page-why-choose-us.jpg')">
      <div class="wrapper section-header">
        <div class="header-block">
          <div class="header-bg"></div>
          <div class="header-text">
            <h1 class="page-title">Why Choose Us</h1>
            <p>How are we different and what makes us better?</p>
          </div>
        </div>
      </div>

      <div class="wrapper section-content">
        <div class="column two-col">
          <p>You know those IT helplines where they just follow a script? Yeah, we hate that too. So at Lucidica we
            listen, and our advice is guaranteed jargon-free. And if we can’t sort it on the phone, we’ll be round yours
            in a jiffy.</p>
          <p>So in simpler terms, we don’t just offer a great service; we have the solutions to your every tech
            problem.</p>
        </div>
        <div class="column two-col">
          <h3 class="light txt-dark-blue">Let us know what you look for in an IT support company:</h3>
          <a class="link-label" href="/contact-us" title="Contact Lucidica">Get in touch with us</a>
        </div>
      </div>
    </div>
  </section><!-- end section#intro -->

  <section class="section" id="the-lucidica-difference">
    <div class="spread bg-dark-blue txt-white">
      <div class="wrapper section-header">
        <div class="title-block">
          <h2 class="section-title margin">What Makes us Better</h2>
        </div>
      </div>

      <div class="wrapper section-content">
        <div class="section-item">
          <h4 class="section-sub">We know we are great at what we do, but we also realise that sometimes it's hard to
            find the right IT company for you.</h4>
          <h4 class="section-sub">We pride ourselves on creating IT contracts which aren't just IT contracts. When you
            sign up with us, you’re not just our client, you become part of the Lucidican family too.</h4>
          <h4 class="section-sub">We want to get to know you and your company to find out what is important to you and
            how we can use technology to make your business better and your life easier.</h4>
          <h4 class="section-sub">Oh, and we also do this...</h4>
          <table class="feature-list">
            <tr>
              <td class="feature">
                <h3>A Dedicated Account Engineer</h3>
                <p>One that knows your company and your technological needs.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>No Break Fix Contracts</h3>
                <p>This means we don't only fix things that are broken, we constantly aim to make your technology more
                  efficient.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>Onsite Visits can be included in your contract</h3>
                <p>Meaning that your engineer isn't just contactable by a phone or email.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>Fully Certified</h3>
                <p>By Microsoft as a Gold Partner but also a corporate partner at the British Library business and IP
                  centre.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>Automatic Offsite Back-Up</h3>
                <p>This ensures that, if you are a Lucidica client, you won't lose anything.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>Anti-Virus and Anti-Malware Software Included</h3>
                <p>To make sure that the you stay safe with the rise of cybercrime.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
            <tr>
              <td class="feature">
                <h3>Ongoing Training and Workshops</h3>
                <p>For all our clients to make sure that they can understand the importance and changes of
                  technology.</p>
              </td>
              <td class="tick"><img class="tick-small" alt="Tick"
                                    src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-small-blue.svg"/>
              </td>
            </tr>
          </table>

        </div><!-- end div.section-item -->

        <div class="clear"></div>

      </div><!-- end div.wrapper -->
    </div><!-- end div.spread -->
  </section><!-- end section#the-lucidica-difference -->

  <section class="section" id="happiness-guarantee">
    <div class="spread bg-dark-grey">
      <div class="wrapper section-header">
        <div class="title-block">
          <h2 class="section-title">Our Happiness Guarantee</h2>
        </div>
      </div>

      <div class="wrapper section-content">
        <div class="tile guarantee">
          <img width="200" height="120" class="icon orange" alt="Tick"
               src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-orange.svg"/>
          <p>If we don’t start a support job within the terms of your SLA we won’t charge you.</p>
        </div><!-- end div.tile -->

        <div class="tile guarantee">
          <img width="200" height="120" class="icon orange" alt="Tick"
               src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-orange.svg"/>
          <p>If we’re late and it’s our fault, we won’t charge you for the time we spend on that job.</p>
        </div><!-- end div.tile -->

        <div class="tile guarantee">
          <img width="200" height="120" class="icon orange" alt="Tick"
               src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/icon-tick-orange.svg"/>
          <p>If you’re unhappy with the quality of the job just let us know. If agreed, we will offer a discount on that
            job.</p>
        </div><!-- end div.tile -->

        <div class="clear"></div>

      </div><!-- end div.wrapper-->
    </div><!-- end div.spread -->
  </section><!-- end section#happiness-guarantee -->

  <section class="section" id="testimonials">
    <div class="spread bg-white txt-orange">
      <div class="wrapper section-header">
        <div class="title-block">
          <h2 class="section-title">Testimonials</h2>
        </div>
      </div>

      <div class="wrapper section-content">

        <?php
          $query = new WP_Query(array(
              'post_type' => 'testimonial',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'asc',
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
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'asc',
                'offset' => 3,
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


      </div><!-- end div.wrapper -->
    </div><!-- end div.spread -->
  </section><!-- end section#testimonials -->

  <section class="awards">
    <h3>Our awards and Certifications</h3>
    <div class="awards-wrap">
      <div class="awards-row">

        <div class="award svg-height">
          <img src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/logo-microsoft-grey.svg" alt="Alt text">
        </div>
        
        <div class="award svg-height">
          <img class="award margin" src="https://www.lucidica.co.uk/wp-content/themes/lucidica/img/ces-grey.svg"
               alt="Alt text">
        </div>

        <div class="award svg-height">
          <a href="https://www.gotechawards.co.uk/news/who-are-the-finalists-for-gotech-awards-2018/" target="_blank">
            <img class="award" style="" src="https://www.lucidica.co.uk/wp-content/uploads/2019/01/go.png" alt="Alt text">
          </a>
        </div>

        <div class="award svg-height">
          <img class="award" style=""
               src="https://www.lucidica.co.uk/wp-content/uploads/2019/01/SME2.png"
               alt="Alt text">
        </div>


      </div>
    </div>
  </section>

<?php get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>
