<?php
  /**
   * Created by PhpStorm.
   * User: Kolya
   * Date: 9/27/2018
   * Time: 2:41 PM
   * Template name: christmas 2018
   */
  get_header(); ?>
  <!-- == CSS STYLES == -->
  <link rel="stylesheet" href="css/style.css" type="text/css"/>

  <!-- == JAVA SCRIPTS == -->
  <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script type='text/javascript' src='js/jquery-1.6.4.min.js'></script>
  <script type='text/javascript' src='js/jquery.blueberry.js'></script>
  <script>
    $(document).ready(function(){
      // Subscribe form submitting
      $('#subscribe').submit(function(){

        $.ajax({
          url: 'scripts/ajax.php',
          type: 'POST',
          data: {email:$('.email').val(),send:'yes'},
          success: function(data){
            $('.email').val(data);
          },
          error: function(){
            $('.email').val('We are sorry but there has been some issue');
          }
        });

        return false;
      });

      $('.blueberry').blueberry();
    });
  </script>

<body>

<header>  <!-- HEADER SECTION BEGIN -->
  <div class="main">

    <h1 class="col3"><img src="images/header-title.png" alt="Super Christmas deals"></h1>
    <div class="clear"></div>

    <h2 class="col2">XMAS Season brings you great offers this year! Check out our deals on limited products and make your loved ones happy!</h2>

    <div class="clear"></div>

    <div class="blueberry col2 col2-center">  <!-- SLIDER BEGIN -->
      <div class="arrow_left"><img src="images/arrow-left.png" alt="Slide left" /></div>
      <div class="arrow_right"><img src="images/arrow-right.png" alt="Slide right" /></div>
      <ul class="slides">
        <li><img src="products/ipod.png" title="Limited edition of popular pocket-player from Apple. Get yours now!" alt="Product iPod" /><span>229.99</span></li>
        <li><img src="products/watch.png" title="Special edition of Monaco watch should be under every tree this year! Beautiful design, great functions and sharp time." alt="Product Watch" /><span>1 859.99</span></li>
        <li><img src="products/shoes.png" title="Every woman's heart will melt while finding those under the tree. We have a deal for you to make your better half happy!" alt="Product Trumpet" /><span>199.99</span></li>
        <li><img src="products/trumpet.png" title="Support your kids in culture education and give them this great trumpet!" alt="Product Trumpet" /><span>199.99</span></li>
        <li><img src="products/puppy.png" title="We have foud a lost puppy, we will give it away for a nice family." alt="Product Puppy" /><span>0.99</span></li>
      </ul>
    </div>  <!-- SLIDER END -->
    <div class="clear"></div>

  </div>

  <div class="trees"></div>
</header> <!-- HEADER SECTION END -->

<section class="snow">   <!-- SNOW SECTION BEGIN -->
  <div class="main">
    <h3 class="product-title col2"><span class="title"></span></h3>
    <div class="clear"></div>
    <div class="col2 col-center">
      <div class="price-buy">
        <div class="price"><div class="product-price"></div></div>
        <a href="#" class="btn-buy-now">Get the season deal</a>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section> <!-- SNOW SECTION END -->

<section class="info"> <!-- INFO SECTION BEGIN -->
  <div class="sg-layer"></div>
  <div class="main">

    <div class="col1">
      <div class="widget">
        <h4 style="padding-left:0px;">About Xmas Season</h4>
        <h5>We wish you a Merry Christmas</h5>
        <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
        <p>voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.amet, consectetur, adipisci velit, sed quia non</p>
      </div>
    </div>

    <div class="col1">
      <div class="widget">
        <h4><img src="images/twitter.png" alt="Twitter feed" />What is new</h4>
        <ul id="twitter_update_list">
          <li>LOADING...</li>
        </ul>
      </div>
    </div>

    <div class="col1">
      <div class="widget">
        <h4><img src="images/email.png" alt="Subscribe for deals">Want more?</h4>
        <p>Fill in your email address and we will send you more of our season deals!</p>
        <form action="scripts/ajax.php" method="post" id="subscribe">
          <input type="email" name="email" placeholder="Fill in your email" class="email" />
          <input type="submit" name="send" value="" class="submit" />
          <div class="clear"></div>
        </form>
        <p>By subscribing to our system, you agree with us sending you our newsletters, special deals and other marketing information.</p>
      </div>
    </div>

    <div class="clear"></div>
  </div>
</section> <!-- INFO SECTION END -->

<footer> <!-- FOOTER SECTION BEGIN -->
  <div class="footer">Copyright © 2011, All Rights Reserved by webakery.asia</div>
</footer> <!-- FOOTER SECTION END -->

<!-- == Javascript for Twitter feed -->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/ChristmasCount.json?callback=twitterCallback2&amp;count=5"></script>

</body>

</html>