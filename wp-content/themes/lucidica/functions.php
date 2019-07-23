<?php
/* Lucidica functions and definitions */

/**
 * Lucidica setup.
 * Sets up theme defaults and registers the various WordPress features that
 * Lucidica supports.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 */

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 1);

function lucidica_setup()
{

    // Switches default core markup for the search form to output valid HTML5.
    add_theme_support('html5', array('search-form'));

    // Custom image sizes for the Lucidica theme.
    add_theme_support('post-thumbnails');
    add_image_size('single-large', 650, 400, true); //(cropped)
    add_image_size('profile-pic', 319, 319, true); //(cropped)
    add_image_size('blog-feature', 500, 500, true); //(cropped)
    add_image_size('blog-tile', 432, 270, true); //(cropped)

}

add_action('after_setup_theme', 'lucidica_setup');


//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_partner_taxonomy', 0);

//create a custom taxonomy name it topics for your posts
function create_partner_taxonomy()
{

// Add new taxonomy, make it hierarchical like categories and specify the translations part for GUI
    $labels = array(
        'name'              => _x('Partner Types', 'taxonomy general name'),
        'singular_name'     => _x('Partner Type', 'taxonomy singular name'),
        'search_items'      => __('Search Partners'),
        'all_items'         => __('All Partners'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Edit Partner Type'),
        'update_item'       => __('Update Partner Type'),
        'add_new_item'      => __('Add New Partner Type'),
        'new_item_name'     => __('New Partner Type Name'),
        'menu_name'         => __('Partner Types'),
    );
// Now register the taxonomy
    register_taxonomy('partner_types', array('partner'), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'partners'),
    ));

}

//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_help_taxonomy', 0);

//create a custom taxonomy name it topics for your posts
function create_help_taxonomy()
{

    $labels = array(
        'name'              => _x('Help Topics', 'taxonomy general name'),
        'singular_name'     => _x('Help Topic', 'taxonomy singular name'),
        'search_items'      => __('Search Help Topics'),
        'all_items'         => __('All Help Topics'),
        'parent_item'       => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item'         => __('Edit Help Topic'),
        'update_item'       => __('Update Help Topic'),
        'add_new_item'      => __('Add New Help Topic'),
        'new_item_name'     => __('New Help Topic Name'),
        'menu_name'         => __('Help Topics'),
    );

    register_taxonomy('help_topics', array('tech_help'), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array(
            'slug'       => 'help/category',
            'with_front' => false
        ),
    ));

}


/**
 * Create Custom Team Post Type.
 */

add_action('init', 'create_post_type');
function create_post_type()
{

    register_post_type('tech_help',
        array(
            'labels'              => array(
                'name'          => __('Tech Help Posts'),
                'singular_name' => __('Tech Help Post'),
                'add_new'       => _x('Add New Post', 'tech_help'),
            ),
            'public'              => true,
            'rewrite'             => array(
                'slug'       => 'help',
                'with_front' => false
            ),
            'has_archive'         => 'help',
            'menu_position'       => 19,
            'exclude_from_search' => false
        )
    );

    register_post_type('team',
        array(
            'labels'              => array(
                'name'          => __('Team Members'),
                'singular_name' => __('Team Member'),
                'add_new'       => _x('Add New', 'team'),
            ),
            'public'              => true,
            'rewrite'             => array(
                'slug'       => 'team',
                'with_front' => false
            ),
            'has_archive'         => false,
            'menu_position'       => 20,
            'exclude_from_search' => true
        )
    );

    register_post_type('partner',
        array(
            'labels'              => array(
                'name'          => __('Partners'),
                'singular_name' => __('Partner'),
                'add_new'       => _x('Add New', 'partner'),
            ),
            'public'              => true,
            'rewrite'             => array(
                'slug'       => 'partners-and-friends',
                'with_front' => false
            ),
            'has_archive'         => false,
            'menu_position'       => 21,
            'exclude_from_search' => true
        )
    );

    register_post_type('testimonial',
        array(
            'labels'              => array(
                'name'          => __('Testimonials'),
                'singular_name' => __('Testimonial'),
                'add_new'       => _x('Add New', 'testimonial'),
            ),
            'public'              => true,
            'rewrite'             => array(
                'slug'       => 'testimonial',
                'with_front' => false
            ),
            'has_archive'         => false,
            'menu_position'       => 22,
            'exclude_from_search' => true
        )
    );

}


/**
 * Return the Google font stylesheet URL, if available.
 *
 * The use of Open Sans and Permanent Marker by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function lucidica_fonts_url()
{
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
     * supported by Open Sans, translate this to 'off'. Do not translate
     * into your own language.
     */
    $open_sans = _x('on', 'Open Sans font: on or off', 'lucidica');

    /* Translators: If there are characters in your language that are not
     * supported by 'Montserrat, translate this to 'off'. Do not translate into your
     * own language.
     */
    $montserrat = _x('on', 'Montserrat font: on or off', 'lucidica');

    if ('off' !== $open_sans || 'off' !== $montserrat) {
        $font_families = array();

        if ('off' !== $open_sans)
            $font_families[] = 'Open Sans:300,400,700,300italic,400italic,700italic';

        if ('off' !== $montserrat)
            $font_families[] = 'Montserrat:300,400,600,700';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );
        $fonts_url = add_query_arg($query_args, "//fonts.googleapis.com/css");
    }

    return $fonts_url;
}

/* Enqueue scripts and styles for the front end. */
function lucidica_scripts_styles()
{

    // Loads JavaScript file with functionality specific to Lucidica.
    wp_enqueue_script('lucidica-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '2013-07-18', true);
//    wp_enqueue_script('jquery-latest',
//        "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, '3.3.1');

    // Add Open Sans and Permanent Marker fonts, used in the main stylesheet.
    wp_enqueue_style('lucidica-fonts', lucidica_fonts_url(), array(), null);
    wp_enqueue_style('genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '2.09');

}

add_action('wp_enqueue_scripts', 'lucidica_scripts_styles');
add_action('wp_enqueue_scripts', 'myajax_data', 99);
function myajax_data()
{
    wp_localize_script('lucidica-script', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}


function lucidica_dequeue_css()
{

    wp_dequeue_style('contact-form-7');
    wp_dequeue_style('wp-post-modal');
    wp_dequeue_style('yoast-seo-adminbar');
}

add_action('wp_enqueue_scripts', 'lucidica_dequeue_css');


/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function lucidica_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed())
        return $title;


    // Add the site name.
    $title .= get_bloginfo('name');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'lucidica'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'lucidica_wp_title', 10, 2);

/* Register widget areas. */
function lucidica_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Secondary Content Top', 'lucidica'),
        'id'            => 'sidebar-3',
        'description'   => __('Appears on some blog pages at the top of the content area.', 'lucidica'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Secondary Content Side', 'lucidica'),
        'id'            => 'sidebar-2',
        'description'   => __('Appears on single blog posts.', 'lucidica'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Secondary Content Bottom Left', 'lucidica'),
        'id'            => 'sidebar-5',
        'description'   => __('Appears on pages at the bottom of the content area.', 'lucidica'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Secondary Content Bottom Right', 'lucidica'),
        'id'            => 'sidebar-6',
        'description'   => __('Appears on pages at the bottom of the content area.', 'lucidica'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Tech Help Banner', 'lucidica'),
        'id'            => 'sidebar-4',
        'description'   => __('Appears at the bottom of the content section of the site.', 'lucidica'),
        'before_widget' => '<div id="tech-help-banner" class="widget %2$s bg-dark-grey">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Secondary Content Footer', 'lucidica'),
        'id'            => 'sidebar-1',
        'description'   => __('Appears in the footer section of the site.', 'lucidica'),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));


}

add_action('widgets_init', 'lucidica_widgets_init');

if (!function_exists('lucidica_paging_nav')) :
    /** Display navigation to next/previous set of posts when applicable. */
    function lucidica_paging_nav()
    {
        global $wp_query;

        // Don't print empty markup if there's only one page.
        if ($wp_query->max_num_pages < 2)
            return;
        ?>
		<nav class="navigation paging-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e('Posts navigation', 'lucidica'); ?></h1>
			<div class="nav-links">

                <?php if (get_next_posts_link()) : ?>
					<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'lucidica')); ?></div>
                <?php endif; ?>

                <?php if (get_previous_posts_link()) : ?>
					<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'lucidica')); ?></div>
                <?php endif; ?>

			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
        <?php
    }
endif;

if (!function_exists('lucidica_entry_meta')) :
    /**
     * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
     * Create your own lucidica_entry_meta() to override in a child theme.
     */
    function lucidica_entry_meta()
    {
        if (is_sticky() && is_home() && !is_paged())
            echo '<span class="featured-post">' . __('Sticky', 'lucidica') . '</span>';

        if (!has_post_format('link') && 'post' == get_post_type())
            lucidica_entry_cat();

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list('', __(', ', 'lucidica'));
        if ($tag_list) {
            echo '<span class="tags-links">' . $tag_list . '</span>';
        }

    }
endif;

function lucidica_entry_cat()
{
    // Translators: used between list items, there is a space after the comma.
    $categories_list = get_the_category_list(__(', ', 'lucidica'));
    if ($categories_list) {
        echo '<span class="categories-links">' . $categories_list . '</span>';
    }
}

function lucidica_entry_author()
{
    // Post author
    if ('post' == get_post_type()) {
        printf('<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_attr(sprintf(__('View all posts by %s', 'lucidica'), get_the_author())),
            get_the_author()
        );
    }
}

if (!function_exists('lucidica_entry_date')) :
    /**
     * Print HTML with date information for current post.
     * Create your own lucidica_entry_date() to override in a child theme.
     * @param boolean $echo (optional) Whether to echo the date. Default true.
     * @return string The HTML-formatted post date.
     */
    function lucidica_entry_date($echo = true)
    {
        if (has_post_format(array('chat', 'status')))
            $format_prefix = _x('%1$s on %2$s', '1: post format name. 2: date', 'lucidica');
        else
            $format_prefix = '%2$s';

        $date = sprintf('<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
            esc_url(get_permalink()),
            esc_attr(sprintf(__('Permalink to %s', 'lucidica'), the_title_attribute('echo=0'))),
            esc_attr(get_the_date('c')),
            esc_html(sprintf($format_prefix, get_post_format_string(get_post_format()), get_the_date()))
        );

        if ($echo)
            echo $date;

        return $date;
    }
endif;
/**
 * Return the post URL.
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 * Falls back to the post permalink if no URL is found in the post.
 * @return string The Link format URL.
 */
function lucidica_get_link_url()
{
    $content = get_the_content();
    $has_url = get_url_in_content($content);

    return ($has_url) ? $has_url : apply_filters('the_permalink', get_permalink());
}

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function lucidica_body_class($classes)
{
    if (is_active_sidebar('sidebar-2') && !is_attachment() && !is_404())
        $classes[] = 'sidebar';

    return $classes;
}

add_filter('body_class', 'lucidica_body_class');


/**
 * Clean up output of <script> tags
 */
// add_filter('script_loader_tag', 'clean_script_tag');
// add_filter('wp_print_footer_scripts ', 'clean_script_tag');

// function clean_script_tag( $input ) {
// 	$input = str_replace( "type='text/javascript' ", '', $input );

// 	return str_replace( "'", '"', $input );
// }

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');

//add_action('pre_get_posts', 'lucidica_query_offset', 1 );

add_filter('widget_text', 'do_shortcode');

add_action('wp_footer', 'mycustom_wp_footer');

add_action('wp_footer', 'mycustom_wp_footer');

function mycustom_wp_footer()
{
    ?>
	<script>
        document.addEventListener('wpcf7mailsent', function (event) {
            if ('7556' == event.detail.contactFormId) {
                ga('send', 'event', 'Contact Form', 'submit');
            }
        }, false);
	</script>
    <?php
}


/* Calculator Mail functionality */
add_action('wp_ajax_website_builder', 'website_builder_request');
add_action('wp_ajax_nopriv_website_builder', 'website_builder_request');
function website_builder_request()
{
//    print 'test';
    $data = $_POST;
    $result = website_builder_request_mail($data['email'], 'service@lucidica.com', 'Website Builder Request Form', website_report_email_template($data));
    print $result;
    exit;
}

/*
 * Function to send email via php-mail
 */
function website_builder_request_mail($to, $bcc, $subject, $mail_template)
{
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: lucidica' . "\r\n";
    $headers .= 'Bcc: ' . $bcc . "\r\n";

    $template =
        '<html>
            <head>
            </head>
            <body>
            <h1>Data received:</h1>
            ' . $mail_template . '
            <p></p>
            </body>
        </html>';

    // Send email
    if (mail($to, $subject, $template, $headers)):
//        $successMsg = 'Email has sent successfully . ';
        return true;
    else:
//        $errorMsg = 'Email sending fail . ';
        return false;
    endif;
}

;

/*
 * Report an incident template for $mail_template
 */
function website_report_email_template($data)
{
    $template = '<p></p><table>';
    foreach ($data as $key => $value) {
        if ($key === 'action') continue;
        $template .= '
            <tr>
                <td>' . $key . ':</td>
                <td>' . $value . '</td>
            </tr>
        ';
    }
    $template .= '</table>';
    return $template;
}


/* Product purchasing page Mail functionality */
add_action('wp_ajax_product_purchasing_submit', 'product_purchasing_submit_request');
add_action('wp_ajax_nopriv_product_purchasing_submit', 'product_purchasing_submit_request');
function product_purchasing_submit_request()
{
//    print 'teststring';
//    echo 'teststring';
    $data = $_POST;
    $result = product_purchasing_submit_request_mail($data['email'], 'products@lucidica.com', 'Product purchasing form submit', product_purchasing_submit_report_email_template($data));
    print $result;
    exit;
}

/*
 * Function to send email via php-mail
 */
function product_purchasing_submit_request_mail($to, $bcc, $subject, $mail_template)
{
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: lucidica' . "\r\n";
    $headers .= 'Bcc: ' . $bcc . "\r\n";

    $template =
        '<html>
            <head>
            </head>
            <body>
            <h1>Data received:</h1>
            ' . $mail_template . '
            <p></p>
            </body>
        </html>';

//     Send email
    if (mail($to, $subject, $template, $headers)):
        $successMsg = 'Email has sent successfully . ';
        return true;
    else:
        $errorMsg = 'Email sending fail . ';
        return false;
    endif;
//    return true;
}

;

/*
 * Report an incident template for $mail_template
 */
function product_purchasing_submit_report_email_template($data)
{
    $template = '<p></p><table>';
    foreach ($data as $key => $value) {
        if ($key === 'action') continue;
        $template .= '
            <tr>
                <td>' . $key . ':</td>
                <td>' . $value . '</td>
            </tr>
        ';
    }
    $template .= '</table>';
    return $template;
}

if (!defined('ABSPATH')) {
    exit;
}
/**
 * Add async attribute if the path contains Google Recaptcha
 * @param  string $tag HTML <script> tag
 * @param  string $handle WordPress’ internal handle for this script
 * @return string HTML <script> tag
 */
function recaptcha_add_async($tag, $handle)
{
    if (strpos($tag, 'gstatic.com/recaptcha') !== false) {
        $tag = str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

add_filter('script_loader_tag', 'recaptcha_add_async', 99, 2);


/**
 * Class Google_review
 */

include_once (__DIR__ . '/parts/json.php');

class Google_review
{
    const api_url = 'https://maps.googleapis.com/maps/api/place/details/';

    private $api_key;
    private $place_id;
    private $wpdb;
    private $table_name;
    private $place_data;

    public static function init()
    {
        $class = __CLASS__;
        new $class;
    }

    /**
     * Google_review constructor.
     * @param $api_key string
     * @param $place_id string
     */
    public function __construct($api_key, $place_id)
    {
        global $wpdb;
        $this->api_key = $api_key;
        $this->place_id = $place_id;
        $this->wpdb = $wpdb;

        $this->create_db();

        $this->fetch_data();

    }

    private function create_db()
    {
        $table_name = $this->wpdb->get_blog_prefix() . 'google_place';
        $this->table_name = $table_name;
        $charset_collate = "DEFAULT CHARACTER SET {$this->wpdb->charset} COLLATE {$this->wpdb->collate}";

        $sql = "CREATE TABLE IF NOT EXISTS {$this->$table_name} (
  				id bigint(20) unsigned NOT NULL auto_increment,
  				place text NOT NULL default '',
  				PRIMARY KEY (id)
				)
				{$charset_collate};";
        dbDelta($sql);
    }

    private function fetch_data()
    {
        $sql = "SELECT * FROM {$this->table_name}";
        $result = $this->wpdb->get_results($sql);
        $this->place_data = $result[0];
    }

    private function fetch_data_from_google()
    {
        $result = $this->wpdb->get_results("SELECT * from {$this->table_name}");
        print(sizeof($result));
        if (sizeof($result)) {
            $content = file_get_contents(self::api_url . 'json?placeid=' . $this->place_id . '&key=' . $this->api_key);
            $this->wpdb->update(
                $this->table_name,
                array('place' => wp_json_encode($content)),
                array('id' => $result[0]->id)
            );
        } else {
            $content = file_get_contents(self::api_url . 'json?placeid=' . $this->place_id . '&key=' . $this->api_key);
            $this->wpdb->insert(
                $this->table_name,
                array('place' => wp_json_encode($content))
            );
        }
    }

    public function get_raw_data()
    {
        return $this->place_data->place;
    }

    public function get_json()
    {
    	$json = new JSON();
        return $json->unserialize(json_decode($this->place_data->place));
    }
}