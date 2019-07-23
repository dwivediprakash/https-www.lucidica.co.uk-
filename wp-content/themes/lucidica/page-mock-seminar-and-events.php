<?php
  /**
   * Created by PhpStorm.
   * User: Kolya
   * Date: 1/3/2019
   * Time: 10:28 AM
   * Template name: Mock seminar and events page
   */
  get_header(); ?>
<style>
  /*header*/
  #latest-post-description {
    color: #D4E2F4;
    font-size: 24px !important;
    font-style: italic;
  }

  .entry-title {
    margin-bottom: 0 !important;
  }

  #descriptions {
    margin-bottom: 10px;
    color: #fff;
  }

  /*end header*/
  .iee_archive .iee_event .img_placeholder {
    min-height: 300px;
    background-position: center center !important;
  }

  .iee_archive .iee_event .img_placeholder {
    background-size: contain !important;
  }

  .col-iee-md-6 {
    background-color: #f5f5f5;
  }

  .live-events h1 {
    padding-top: 25px;
  }

  .live-events h1,
  .past-events h1 {
    text-align: center;
    font-weight: 600;
    color: #003865;
  }

  #eventbrite-wrap,
  #eventbrite-wrap__past-events {
    flex-flow: row wrap;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    /*align-items: center;*/
  }

  #eventbrite-wrap .event-item {
    flex: 0 1 25%;
  }

  #eventbrite-wrap__past-events .event-item {
    flex: 0 1 25%;
    margin: 0 1%;
  }

  #eventbrite-wrap .event-item,
  #eventbrite-wrap__past-events .event-item {
    /*width: 49%;*/
    /*padding: 0 0.5%;*/
    margin-bottom: 5%;
    position: relative;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
  }

  #eventbrite-wrap .event-item:last-child {
    margin-bottom: 1%;
  }

  #eventbrite-wrap .event-item .event-item_top,
  #eventbrite-wrap__past-events .event-item .event-item_top {
    position: relative;
    bottom: 0;
    /*background: #003865;*/
    /*padding-top: 40px;*/
  }

  #eventbrite-wrap .event-item .event-item_name a,
  #eventbrite-wrap__past-events .event-item .event-item_name a,
  #eventbrite-wrap .event-item .event-item_description,
  #eventbrite-wrap__past-events .event-item .event-item_description,
  #eventbrite-wrap .event-item .event-item_start,
  #eventbrite-wrap__past-events .event-item .event-item_start {
    font-family: "Montserrat", Helvetica, Arial, sans-serif;
  }

  #eventbrite-wrap .event-item .event-item_image,
  #eventbrite-wrap__past-events .event-item .event-item_image,
  #eventbrite-wrap .event-item .event-item_name,
  #eventbrite-wrap__past-events .event-item .event-item_name,
  #eventbrite-wrap__past-events .event-item .event-item_description,
  #eventbrite-wrap .event-item .event-item_description {
    text-align: center;
  }

  #eventbrite-wrap .event-item .event-item_image {
  }

  #eventbrite-wrap .event-item .event-item_name,
  #eventbrite-wrap__past-events .event-item .event-item_name {
    /*position: absolute;*/
    /*bottom: 0;*/
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    /*background: #003865;*/
    padding-top: 10px;
    min-height: 75px;
    /*min-height: 120px;*/
  }

  #eventbrite-wrap .event-item .event-item_image img,
  #eventbrite-wrap__past-events .event-item .event-item_image img {
    display: block;
    height: auto;
    max-width: 100%;
    margin: auto;
    /*padding: 0 10px;*/
  }

  #eventbrite-wrap .event-item .event-item_name a,
  #eventbrite-wrap__past-events .event-item .event-item_name a {
    color: #1e5b91;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: 600;
    /*text-decoration: underline;*/
  }

  #eventbrite-wrap .event-item .event-item_description,
  #eventbrite-wrap__past-events .event-item .event-item_description,
  #eventbrite-wrap .event-item .event-item_start,
  #eventbrite-wrap__past-events .event-item .event-item_start {
    margin: 10px 0;
  }

  #eventbrite-wrap .event-item .event-item_description,
  #eventbrite-wrap__past-events .event-item .event-item_description {
    font-size: 18px;
  }

  #eventbrite-wrap .event-item .event-item_description,
  #eventbrite-wrap__past-events .event-item .event-item_description {
    padding: 0 1%;
    height: 100px;
    overflow-y: auto;
    /*transition: all 1s;*/
  }

  #eventbrite-wrap .event-item .event-item_start,
  #eventbrite-wrap__past-events .event-item .event-item_start {
    font-size: 16px;
    font-weight: 600;
    color: #fff;
  }

  #eventbrite-wrap .event-item .event-item_register {
    background-color: #ff4000;
  }

  #eventbrite-wrap .event-item .event-item_bottom {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background: #003865;
  }

  #eventbrite-wrap .event-item .event-item_register a {
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    /*text-decoration: underline;*/
    padding: 10px;
  }

  #eventbrite-wrap .event-item__lack {
    text-align: center;
  }

  .event-item_read-more,
  .read-more {
    text-align: right;
    color: #003865;
    padding-right: 10px;
  }

  .event-item_read-more:hover,
  .read-more:hover {
    cursor: pointer;
    text-decoration: underline;
  }

  .event-item_description.full-height {
    height: auto !important;
    transition: all 1s;
  }

  /*Overwrite styles from style.css*/
  h1 span.lucidica {
    display: block !important;
  }

  .col {
    vertical-align: middle;
  }

  /*END*/
  @media (max-width: 1200px) {
    #eventbrite-wrap .event-item .event-item_start,
    #eventbrite-wrap__past-events .event-item .event-item_start {
      font-size: 14px;
      text-align: center;
    }
  }

  @media (max-width: 992px) {
    #eventbrite-wrap .event-item, #eventbrite-wrap__past-events .event-item {
      flex: 0 1 40%;
    }

    .iee_archive .archive-event .iee_event {
      height: 400px;
    }

    #eventbrite-wrap .event-item .event-item_bottom {
      flex-direction: column;
    }

    #eventbrite-wrap .event-item .event-item_register {
      margin-bottom: 15px;
    }

    h1 span.lucidica {
      font-size: 40px;
    }

    .feature article h2.entry-title a {
      font-size: 30px;
    }
  }

  @media (min-width: 992px) {
    .col-iee-md-6 {
      width: 49%;
      margin-left: 5px;
      margin-right: 5px;
    }
  }

  @media (max-width: 600px) {
    #descriptions,
    #latest-post-description {
      text-align: center;
    }

    .link-label.bg-orange {
      margin: auto;
    }

    #eventbrite-wrap,
    #eventbrite-wrap__past-events {
      flex-direction: column;
      align-items: center;
    }

    #eventbrite-wrap .event-item,
    #eventbrite-wrap__past-events .event-item {
      width: 67%;
      margin-bottom: 5%;
    }

    #eventbrite-wrap .event-item .event-item_image img,
    #eventbrite-wrap__past-events .event-item .event-item_image img {
      margin: auto;
    }

    #eventbrite-wrap .event-item .event-item_start,
    #eventbrite-wrap__past-events .event-item .event-item_start {
      text-align: center;
    }

    #eventbrite-wrap .event-item .event-item_name,
    #eventbrite-wrap__past-events .event-item .event-item_name {
      min-height: auto;
    }

    #eventbrite-wrap .event-item .event-item_name a,
    #eventbrite-wrap__past-events .event-item .event-item_name a {
      font-size: 20px;
      padding: 0 1%;
    }

    #eventbrite-wrap .event-item,
    #eventbrite-wrap__past-events .event-item {
      padding: 0;
    }
  }

  @media (max-width: 476px) {
    #eventbrite-wrap .event-item, #eventbrite-wrap__past-events .event-item {
      width: 85%;
    }

    h1.page-title {
      padding: 10px 0;
    }

    h1 span.lucidica {
      font-size: 30px;
    }

    .feature article h2.entry-title a {
      font-size: 20px;
    }

    .right-col {
      padding: 0px 1% 35px 1%;
    }
  }
</style>
<?php //echo do_shortcode('[eventbrite_events col="2"]'); ?>

<section class="section featured-post">
  <div class="feature" style="background-image: url('<?php echo $bg[0]; ?>');">
    <div class="feature-bg"></div>
    <div class="header-text col left-col">
      <h1 class="page-title"><span class="lucidica">Lucidica events</span></h1>
      <div id="latest-post-description">Here you can find upcoming and past events in Lucidica</div>
    </div><!-- .left-col -->
    <div class="header-text col right-col">

      <h4 class="latest"><span class="flag">Upcoming event</span></h4>
      <article id="post">
        <div class="article-content">
          <header class="entry-header">
            <h2 id="upcoming-event_h2" class="entry-title">Loading</h2>

            <div id="descriptions" class="entry-meta">

              <?php //lucidica_entry_date(); ?>
              <?php //lucidica_entry_author(); ?>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php //the_excerpt(); ?>
          </div><!-- .entry-content -->

          <footer class="entry-meta">
            <?php //lucidica_entry_meta(); ?>
            <?php //edit_post_link(__('Edit', 'lucidica'), '<span class="edit-link">', '</span>'); ?>
          </footer><!-- .entry-meta -->
        </div><!-- .article-content -->
        <!--          <a class="link-label bg-orange" href="" title="Read this blog post">Register</a>-->
      </article><!-- #post -->
    </div><!-- .right-col -->

  </div><!-- .feature -->
</section><!-- .featured-post -->

<!--  Testing API-->
<div class="live-events">
  <h1>Live events</h1>
  <div id="eventbrite-wrap">Loading</div>
</div>

<div class="past-events">
  <h1>Past events</h1>
  <div id="eventbrite-wrap__past-events">Loading</div>
</div>
<!--  END Testing API-->

<div id="test-jQuery"></div>

<script>
  var request = new XMLHttpRequest();
  // request.open('GET', 'https://www.eventbriteapi.com/v3/users/me/owned_events/?status=ended');
  request.open('GET', 'https://www.eventbriteapi.com/v3/users/me/owned_events/?order_by=start_desc');
  request.setRequestHeader('Authorization', 'Bearer H24775IF3YR76JKUVX2A');
  // request.setRequestHeader('Content-Type', 'application/json');
  request.onreadystatechange = function () {
    if (this.readyState === 4) {
      // console.log('Status:', this.status);
      // console.log('Headers:', this.getAllResponseHeaders());
      // console.log('Body:', this.responseText);
      var obj = JSON.parse(this.responseText);
      var eventbrite_item_wrap = document.getElementById('eventbrite-wrap');
      var eventbrite_item_wrap_past = document.getElementById('eventbrite-wrap__past-events');
      var upcoming_event_h2 = document.getElementById('upcoming-event_h2');
      var descriptions = document.getElementById('descriptions');
      var completed_events_summary = 0;
      var live_event_counter = 0;
      var upcoming_event_date_time = obj.events[0].start.local.split('T');
      var upcoming_event_date = upcoming_event_date_time[0];
      var upcoming_event_time = upcoming_event_date_time[1];
      jQuery(upcoming_event_h2).text("");
      jQuery(upcoming_event_h2).append("<a target='_blank' href=" + obj.events[0].url + ">" + obj.events[0].name.text + "</a>  ");
      jQuery(descriptions).append(obj.events[0].start.timezone + "</br>" + "Date: " + upcoming_event_date + "</br>" + "Time: " + upcoming_event_time);
      jQuery("#post").append("<a class='link-label bg-orange' target='_blank' href=" + obj.events[0].url + " >Register</a>");
      jQuery(eventbrite_item_wrap).text("");
      jQuery(eventbrite_item_wrap_past).text("");

      obj.events.map(function (a) {
        if (a.status === "live") {
          live_event_counter = live_event_counter + 1;
          var live_event_date_time = a.start.local.split('T');
          var live_event_date = live_event_date_time[0];
          var live_event_time = live_event_date_time[1];
          jQuery(eventbrite_item_wrap)
            .append("<div class='event-item'>" +
              "<div class='event-item_top'>" +
              "<div class='event-item_image'><img src='" + a.logo.url + "' alt=''></div>" +
              "<div class='event-item_name'><a target='_blank' href=" + a.url + ">" + a.name.text + "</a></div>" +
              "</div>" +
              "<div class='event-item_description'> " + a.description.text + " </div>" +
              "<div class='event-item_read-more'> Read more </div>" +
              "<div class='event-item_bottom'>" +
              "<div class='event-item_start'>" + "Date: " + live_event_date + "</br>" + "Time: " + live_event_time + "</div>" +
              "<div class='event-item_register'><a target='_blank' href=" + a.url + ">Register</a></div>" +
              "</div>" +
              "</div>"
            );
        }
        if (live_event_counter === 0) {
          jQuery(eventbrite_item_wrap).append(" <div class='event-item__lack'> There is no live events at the moment. </div>");
        }
        if (a.status === "completed") {
          completed_events_summary = completed_events_summary + 1;
          if (completed_events_summary < 11) {
            jQuery(eventbrite_item_wrap_past)
              .append("<div class='event-item'>" +
                "<div class='event-item_top'>" +
                "<div class='event-item_image'><img src='" + a.logo.url + "' alt=''></div>" +
                "<div class='event-item_name'><a target='_blank' href=" + a.url + ">" + a.name.text + "</a></div>" +
                "</div>" +
                "<div class='event-item_description'> " + a.description.text + " </div>" +
                "<div class='event-item_read-more'> Read more </div>  " +
                "</div>"
              );
          }
        }
      });

      var event_item_read_more = document.getElementsByClassName("event-item_read-more");
      for (var i = 0; i < event_item_read_more.length; i++) {
        event_item_read_more[i].onclick = function () {
          if (jQuery(this).prev().height() === 100) {
            jQuery(this).prev().animate({
              height: "100%",
            }, 1000);
            jQuery(this).text("Read less");
          } else {
            jQuery(this).prev().animate({
              height: "100px",
            }, 1000);
            jQuery(this).text("Read more");
          }
        };
      }
    }
  };
  request.send();
</script>
