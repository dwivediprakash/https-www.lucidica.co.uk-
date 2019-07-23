/****
* AMP Framework Reset
*****/
body {
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    line-height: 1.4;
}

ol, ul {
    list-style-position: inside
}

p, ol, ul, figure {
    margin: 0 0 1em;
    padding: 0;
}

a, a:active, a:visited {
    color: #8cadd0;
    text-decoration: none
}

a:hover, a:active, a:focus {
}

pre {
    white-space: pre-wrap;
}

.hidden {
    display: none
}

blockquote {
    background: #f1f1f1;
    margin: 10px 0 20px 0;
    padding: 15px;
}

blockquote p:last-child {
    margin-bottom: 0;
}

.amp-wp-unknown-size img {
    object-fit: contain;
}

.amp-wp-enforced-sizes {
    max-width: 100%
}

/* Image Alignment */
.alignright {
    float: right;
}

.alignleft {
    float: left;
}

.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.flex {
    display: flex;
}

.left {
    justify-self: flex-start;
    margin-right: auto;
}

.right {
    justify-self: flex-end;
    margin-left: auto;
}

amp-iframe {
    max-width: 100%;
    margin-bottom: 20px;
}

/* Captions */
.wp-caption {
    padding: 0;
}

.wp-caption-text {
    font-size: 12px;
    line-height: 1.5em;
    margin: 0;
    padding: .66em 10px .75em;
    text-align: center;
}

/* AMP Media */
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
    margin: 0 -16px 1.5em;
}

amp-carousel > amp-img > img {
    object-fit: contain;
}

/****
* Container
*****/
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 0px 10px;
}

/****
* AMP Sidebar
*****/
amp-sidebar {
    width: 250px;
}

/* AMP Sidebar Toggle button */
.amp-sidebar-button {
    position: relative;
}

.amp-sidebar-toggle {
}

.amp-sidebar-toggle span {
    display: block;
    height: 2px;
    margin-bottom: 5px;
    width: 22px;
    background: #000;
}

.amp-sidebar-toggle span:nth-child(2) {
    top: 7px;
}

.amp-sidebar-toggle span:nth-child(3) {
    top: 14px;
}

/* AMP Sidebar close button */
.amp-sidebar-close {
    background: #333;
    display: inline-block;
    padding: 5px 10px;
    font-size: 12px;
    color: #fff;
}

/****
* AMP Navigation Menu with Dropdown Support
*****/
.toggle-navigation ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    width: 100%
}

.toggle-navigation ul li {
    font-size: 13px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.11);
    padding: 11px 0px;
    width: 25%;
    float: left;
    text-align: center;
    margin-top: 6px
}

.toggle-navigation ul ul {
    display: none
}

.toggle-navigation ul li a {
    color: #eee;
    padding: 15px;
}

.toggle-navigation {
    display: none;
    background: #444;
}

/****
* Header
*****/
.header {
    display: flex;
    align-items: center;
}

.amp-logo {
    width: 190px;
    height: auto;
}

.header h1 {
    font-size: 1.5em;
}

.header .right {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.amp-phone, .amp-social, .amp-sidebar-button {
    display: inline-flex;
}

.amp-phone {
    top: 4px;
}

.header .amp-social {
    margin: 0px 15px;
}

.amp-sidebar-button {
    top: 2px;
}

/****
* Loop
*****/
.loop-post {
    display: inline-block;
    width: 100%;
    margin: 6px 0px;
}

.loop-post .loop-img {
    float: left;
    margin-right: 15px;
}

.loop-post h2 {
    font-size: 1.2em;
    margin: 0px 0px 8px 0px;
}

.loop-post p {
    font-size: 14px;
    color: #333;
    margin-bottom: 6px;
}
.loop-title a {
    font-size: 0.7em;
}

.loop-post ul {
    list-style-type: none;
    display: inline-flex;
    margin: 0px;
    font-size: 14px;
    color: #666;
}

.loop-post ul li {
    margin-right: 2px;
}

.loop-date {
    font-size: 12px;
}

.loop-title a {

}

/****
* Single
*****/
/** Related Posts **/
.amp-related-posts ul {
    list-style-type: none;
}

.amp-related-posts ul li {
    display: inline-block;
    line-height: 1.3;
    margin-bottom: 5px;
}

.amp-related-posts amp-img {
    float: left;
    width: 100px;
    margin: 0px 10px 0px 0px;
}

/****
* Comments
*****/
.comments_list ul {
    margin: 0;
    padding: 0
}

.comments_list ul.children {
    padding-bottom: 10px;
    margin-left: 4%;
    width: 96%;
}

.comments_list ul li p {
    margin: 0;
    font-size: 14px;
    clear: both;
    padding-top: 5px;
}

.comments_list ul li .says {
    margin-right: 4px;
}

.comments_list ul li .comment-body {
    padding: 10px 0px 15px 0px;
}

.comments_list li li {
    margin: 20px 20px 10px 20px;
    background: #f7f7f7;
    box-shadow: none;
    border: 1px solid #eee;
}

.comments_list li li li {
    margin: 20px 20px 10px 20px
}

.comment-author {
    float: left
}

/****
* Footer
*****/
.footer {
    padding: 0px 10px 20px;
    font-size: 12px;
    text-align: center;
    position: relative;
    box-sizing: border-box;
}
.footer__bg {
    position: absolute;
    z-index: -1;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #f2f2f2;
}
/* LUCIDICA THEME STYLES */

.homepage {
    text-align: center;
}
.homepage .page-top-content {
    background-image: url("/wp-content/uploads/2018/06/bg-intro.jpg");
}
.page-top-content {
    padding-top: 200px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.page-content p {
    padding: 0 15px;
    margin: 10px 0;
}
.page-content .blue {
    padding: 15px;
    margin: 0;
    background: #52a0d3;
    color: #FFFFFF;
    font-style: italic;
}
a.button {
    margin: auto;
    display: inline-block;
    padding: 10px 25px;
    border-radius: 50px;
    color: #FFFFFF;
    background: #56adf1;
    text-transform: uppercase;
    margin: 30px 0px;
}
.button.orange {
    background: #ff4000;
}
.button.small {
    padding: 3px 10px 1px;
}

.top-content {
    margin-bottom: 20px;
}
.section-title {
    box-sizing: border-box;
    padding: 50px 10px;
    text-align: center;
    color: #ffffff;
}
.section-title h1 {
    font-size: 2em;
    font-weight: 700;
    margin-bottom: 0;
    text-transform: uppercase;
}
.section-title h2 {
    font-size: 1.8em;
    font-weight: 400;
    margin-top: 0;
    text-transform: uppercase;
    opacity: .7;
}
.content-items {
    display: flex;
    flex-direction: column;
    padding: 10px 0;
}
.content-items__item {
    margin: 10px 0;
    padding: 0 20px;
    box-sizing: border-box;
}
.content-items__title {
    font-size: 2em;
    margin-bottom: 10px;
}
.content-items__img {
    margin: auto;
    margin-bottom: 10px;
    width: 100px;
    height: 100px;
}
.content-items__text {
    margin-bottom: 20px;
    box-sizing: border-box;
}
.content-items__link {
    font-weight: 400;
    text-transform: uppercase;
}
.about-us {
    background: #0b2b47;
    padding-bottom: 20px;
}
.about-us .section-title{
    background: url("/wp-content/themes/lucidica/img/bg-about.jpg") no-repeat;
    background-size: cover;
}
.about-us .content-items__title {
    color: #FFFFFF;
}
.about-us .content-items__text {
    color: #ccd3d7;
}
.our-services > .section-title{
    background: url("/wp-content/themes/lucidica/img/bg-services.jpg") no-repeat;
    background-size: cover;
}
.why-us {
}
.why-us .section-title{
    background: url("/wp-content/themes/lucidica/img/bg-why-us.jpg") no-repeat center;
    background-size: cover;
}
.blog, .recruitment {
    background: #231f20;
    padding: 10px 20px;
    color: #cccccc;
    text-align: center;
}
.blog .loop-title a {
    display: inline-block;
    border-left: 3px solid #56a0d3;
    color: #56a0d3;
    padding-left: 20px;
}
.blog .section-title h1, .recruitment .section-title h1{
    margin: 0;
}
.blog h2:first-of-type {
    /*text-align: center;*/
}
.partners {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.partners__img {
    width: 25%;
}

.contact {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.copyright {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.sticky_social {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 40px;
}
.sticky_social > a {
    display: none;
}
/*
AMP SIDEBAR MENU
 */
.menu-amp-menu {
}

/*
OUR SERVICES PAGE
 */
.our-services .page-top-content {
    background-image: url('/wp-content/themes/lucidica/img/bg-page-our-services.jpg');
}
.page-top-content .title {
    position: relative;
    box-sizing: border-box;
    padding: 10px;
    color: #ffffff;
}
.page-top-content .title-bg {
    position: absolute;
    top:0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(82,160,211,1);
    mix-blend-mode: multiply;
}
.page-top-content .title h1 {
    margin: 0;
    position: relative;
    z-index: 2;
}
.page-top-content .title p {
    margin-bottom: 0;
    position: relative;
    z-index: 2;
    padding: 0;
    font-style: italic;
}
.services-list {

}
.services-list__service {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0;
    border-bottom: 1px dotted #dddddd;
}
.services-list__service:last-child {
    border-bottom: none;
}
.service__title {
    text-align: center;
}
.service__img {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
}
.page-container ul {
    list-style-type: none;
}
.page-container ul li {
    position: relative;
    padding-right: 40px;
}
.page-container ul li:after {
    content: "";
    display: block;
    position: absolute;
    top:0;
    bottom: 0;
    right: 0;
    margin: auto;
    width: 20px;
    height: 20px;
    background: url("/wp-content/themes/lucidica/img/icon-tick-small-orange.svg") no-repeat;
    background-size: contain;
}
.service__sites {
    display: flex;
    justify-content: space-around;
    align-items: stretch;
    flex-wrap: wrap;
}
.service__sites .site {
    width: 220px;
    text-align: center;
    margin-bottom: 20px;
}
.service__sites .site h3{
    margin: 5px 0;
    font-weight: 300;
}
.service__sites .site a{
    margin: 0;
}

/*
BLOG PAGE
 */
.blog-posts .page-top-content {
    padding-top: 0;
}
.blog-posts .loop-post {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: stretch;
}
.blog-posts .loop-category {
    width: 100%;
    background: #0b2b47;
    margin-bottom: 5px;
}
.blog-posts .loop-category li {
    padding: 0 10px;
}
.blog-posts .loop-category li a {
    color: #FFFFFF;
}
.blog-posts .loop-category li:after {
    display: none;
}
.blog-posts .loop-img {
    margin: 0;
}
.blog-posts .loop-text {
    width: calc(100% - 160px);
    display: flex;
    flex-direction: column;
    justify-items: flex-start;
    align-items: flex-start;
}
.blog-posts .loop-title {
    font-size: 0.8em;
}
.blog-posts .loop-title a {
    font-size: 1em;
}

/*
CONTACT-US PAGE
 */
.contact-us .page-top-content {
    background-image: url('/wp-content/themes/lucidica/img/bg-page-contact-us.jpg');
    border-bottom: 4px solid #ff4000;
}
.contact-us .services-list {
    background: #0b2b47;
    color: #ffffff;
}
.contact-us .services-list__service {
    border-bottom: none;
}
.contact-us .services-list__service a {
    color: #ffffff;
    text-align: center;
}
.leave-info {
    padding: 20px 0;
    text-align: center;
    color: #0b2b47;
}
.leave-info p {
    font-style: italic;
}
.quote-form-apply {
    font-style: italic;
    text-align: center;
}