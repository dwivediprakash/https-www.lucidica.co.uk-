<?php
/**
 * Created by PhpStorm.
 * User: lykhachov
 * Date: 9/27/18
 * Time: 3:46 PM
 */
?>
<div class="wrapper section-content bg-dark-blue" style="padding: 30px 0 20px;margin-bottom: 10px;">
        <div class="section-item" style="border-bottom: 0; padding-bottom: 0; margin: 0 auto;">
          <h1>Web calculator</h1>
            <form action="" class="web-calculator">
                <div class="web-calculator__section">
                    <h5>Do you want a custom design or a template?</h5>
                    <label class="web-calculator__radio">Custom Design<input name="design" type="radio" data-price="780" value="Custom"><span class="switcher"></span></label>
                    <label class="web-calculator__radio">Template<input name="design" type="radio" data-price="200" value="Purchased"><span class="switcher"></span></label>
                </div>
                <div class="web-calculator__section">
                    <label class="web-calculator__input web-calculator__pages-count">
                        <h5>How many pages do you want?</h5>
                        <input type="number" min="1" max="20" value="1" name="pages" data-price="60" required></label>
                </div>
                <div class="web-calculator__section">
                    <h5>Do you want an Ecommerce website?</h5>
                    <label class="web-calculator__radio"><span>Yes, I need an online store</span><input name="ecomm" type="radio" data-price="500" value="Yes"><span class="switcher"></span></label>
                    <label class="web-calculator__radio"><span>No, I'm not selling any products online</span><input name="ecomm" type="radio" data-price="0" value="No"><span class="switcher"></span></label>
                </div>
                <div class="web-calculator__section">
                    <h5>SEO & Analytics</h5>
                    <label class="web-calculator__checkbox">On-page optimisation<input name="seo-page-optim" type="checkbox" data-price="180"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">Backlinks<input name="seo-backlink" type="checkbox" data-price="180"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">Google Analytics<input name="seo-ga" type="checkbox" data-price="120"><span class="switcher"></span></label>
                </div>
                <div class="web-calculator__section">
                    <h5>Extra Features</h5>
                    <label class="web-calculator__checkbox">Live Chat<input name="extra-live" type="checkbox" data-price="120"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">Social Media Integration<input name="extra-social" type="checkbox" data-price="160"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">Blog<input name="extra-blog" type="checkbox" data-price="210"><span class="switcher"></span></label>
                </div>
                <div class="web-calculator__section">
                    <h5>Website Add-ons</h5>
                    <label class="web-calculator__checkbox">Hosting<input name="addons-hosting" type="checkbox" data-price="200"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">WordPress Support<input name="addons-ithemes" type="checkbox" data-price="200"><span class="switcher"></span></label>
                    <label class="web-calculator__checkbox">Domain<input name="addons-domain" type="checkbox" data-price="30"><span class="switcher"></span></label>
<!--                    <label class="web-calculator__checkbox">SSL<input name="addons-ssl" type="checkbox" data-price="70"><span class="switcher"></span></label>-->
                </div>
                <div class="estimate-price"><h2>From: £<span>0</span></h2></div>
                <div class="web-calculator__section">
                    <label class="web-calculator__input">Name:
                        <input type="text" name="name" required></label>
                    <label class="web-calculator__input">Email:
                    <input type="email" name="email" required></label>
                </div>
                <div class="web-calculator__section">
                    <label class="web-calculator__input">Number:
                        <input type="text" name="number" required></label>
                    <label class="web-calculator__input">Company:
                    <input type="text" name="Company" required></label>
                </div>
                <div class="submit">
                    <button class="link-label">Build a website!</button>
                    <h4>Request has sent successfully</h4>
                </div>
            </form>
        </div><!-- end div.section-item -->
    </div>
<script async defer src="<?php echo get_template_directory_uri(); ?>/js/web-calculator.js"></script>