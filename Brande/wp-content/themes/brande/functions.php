<?php
/*
 * Main Functions file
 * 12.1.2021
*/

include('inc/breadcrumbs.php');
include('inc/aq_resizer.php');
include('inc/pagenavi.php');
require_once 'inc/mobile_detect.php';


// Menu Support
if ( function_exists( 'register_nav_menus' ) ) {
     register_nav_menus(
      array(
        'menu' => 'Main Menu',
      )
     );
}

// Support Title tag
add_theme_support( 'title-tag' );


// Support thumbnails
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');


// Register widget area
function dunes_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Instagram', 'dunes' ),
			'id'            => 'instagram',
			'description'   => __( 'instagram section', 'dunes' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dunes_widgets_init' );

/*
// Custom Menus classes
add_filter('nav_menu_css_class', 'normalize_wp_classes', 10, 2);

// for the page menu fallback (wp_list_pages)
add_filter('page_css_class', 'normalize_wp_classes', 10, 2);

function normalize_wp_classes($classes, $item){

  // old class => new class
  $replacements = array(
    'current-menu-item'     => 'active',
    'current-menu-parent'   => 'active-parent',
    'current-menu-ancestor' => 'active-parent',
    'current_page_item'     => 'active',
    'current_page_parent'   => 'active-parent',
    'current_page_ancestor' => 'active-parent',
    'current-page-item'     => 'active',
    'current-page-parent'   => 'active-parent',
    'current-page-ancestor' => 'active-parent'
  );

  // do the replacements above
  $classes = strtr(implode(',', $classes), $replacements);
  $classes = explode(',', $classes);

  // remove any classes that are not present in the replacements array,
  // and return the result
  return array_unique(array_intersect(array_values($replacements), $classes));
}
*/

// Add font size to editor
function scanwp_buttons( $buttons ) {
    array_unshift( $buttons, 'fontsizeselect' ); 
    return $buttons;
  }
add_filter( 'mce_buttons_2', 'scanwp_buttons' );


//	Adds two buttons to the TinyMCE editor to enable writing text in Left to Right (LTR) and Right to Left (RTL) directions.
add_action( "init", "tinymce_bidi_addbuttons" );

function tinymce_bidi_addbuttons() {
    if( !current_user_can ( 'edit_posts' ) && !current_user_can ( 'edit_pages' ) ) {
        return;
    }
    if( get_user_option ( 'rich_editing' ) == 'true' ) {
        add_filter( "mce_external_plugins", "tinymce_bidi_plugin" );
        add_filter( "mce_buttons", "tinymce_bidi_buttons" );
    }
}

function tinymce_bidi_buttons($buttons) {
    array_push($buttons, "separator", "ltr", "rtl");
    return $buttons;
}

function tinymce_bidi_plugin($plugin_array) {
    if (get_bloginfo('version') < 3.9) {
        $plugin_array['directionality'] = includes_url('js/tinymce/plugins/directionality/editor_plugin.js');
    } else {
        $plugin_array['directionality'] = includes_url('js/tinymce/plugins/directionality/plugin.min.js');
    }
    return $plugin_array;
}


// Content Excerpt Limit
// use: echo excerpt(30);
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
    }

    function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	} 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

// Remove WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Remove Comments Feed
add_theme_support( 'automatic-feed-links');
add_filter( 'feed_links_show_comments_feed', '__return_false' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );


// remove wp-embed.min.js
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


// Remove (block-library/style.min.css)
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );


// Disabling WooCommerce styles & Scripts IF not required
add_action( 'get_header', 'sk_conditionally_remove_wc_assets' );

// Unload WooCommerce assets on non WooCommerce pages.
function sk_conditionally_remove_wc_assets() {

    // if WooCommerce is not active, abort.
    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }

    // if this is a WooCommerce related page, abort.
    if ( is_woocommerce() || is_cart() || is_checkout() || is_page( array( 'my-account' ) ) ) {
        return;
    }

    remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
    remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
}


// Remove Annoying JQMIGRATE: Migrate is in console for +WP 4.5
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


// Remove emoji CDN hostname from DNS prefetching hints.
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
		if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}


// Clean up WordPress Header
function crunchify_remove_version() {
  return '';
}
add_filter('the_generator', 'crunchify_remove_version');

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');

function crunchify_cleanup_query_string( $src ){
  $parts = explode( '?', $src );
  return $parts[0];
}
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );



// Change Thank you
function wpse_edit_footer() {
    add_filter( 'admin_footer_text', 'wpse_edit_text', 11 );
}

function wpse_edit_text($content) {
    return " ";
}
add_action( 'admin_init', 'wpse_edit_footer' );


// Remove the WP Logo from the Toolbar
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );


// Change welcome text
function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
	$user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$profile_url = get_edit_profile_url( $user_id );
 
	if ( 0 != $user_id ) {
	/* Add the "My Account" menu */
	$avatar = get_avatar( $user_id, 28 );
	$howdy = sprintf( __('Welcome back, %1$s'), $current_user->display_name );
	$class = empty( $avatar ) ? '' : 'with-avatar';
	 
	$wp_admin_bar->add_menu( array(
		'id' => 'my-account',
		'parent' => 'top-secondary',
		'title' => $howdy . $avatar,
		'href' => $profile_url,
		'meta' => array(
		'class' => $class,
		),
	) );
	 
	}
}
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );


//  Remove admin color scheme options from user profile
function admin_color_scheme() {
   global $_wp_admin_css_colors;
   $_wp_admin_css_colors = 0;
}
add_action('admin_head', 'admin_color_scheme');


//  Change Settings icon
function modify_settings_icon() {
    global $menu;
    $menu[80][6] = 'dashicons-admin-generic';
}
add_action( 'admin_menu', 'modify_settings_icon' );


// Remove menus
function remove_menus(){
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          	//Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );


// Remove avilable tools Sub menu & Discussion
function remove_tools() {
    remove_submenu_page('tools.php', 'tools.php');
    remove_submenu_page( 'options-general.php', 'options-discussion.php');
    remove_submenu_page( 'index.php', 'update-core.php');
    remove_submenu_page( 'themes.php', 'Customizer');
}
add_action( 'admin_menu', 'remove_tools');


// Remove Customize
function remove_customize() {
    $customize_url_arr = array();
    $customize_url_arr[] = 'customize.php'; // 3.x
    $customize_url = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), 'customize.php' );
    $customize_url_arr[] = $customize_url; // 4.0 & 4.1
    if ( current_theme_supports( 'custom-header' ) && current_user_can( 'customize') ) {
        $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'header_image', $customize_url ); // 4.1
        $customize_url_arr[] = 'custom-header'; // 4.0
    }
    if ( current_theme_supports( 'custom-background' ) && current_user_can( 'customize') ) {
        $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'background_image', $customize_url ); // 4.1
        $customize_url_arr[] = 'custom-background'; // 4.0
    }
    foreach ( $customize_url_arr as $customize_url ) {
        remove_submenu_page( 'themes.php', $customize_url );
    }
}
add_action( 'admin_menu', 'remove_customize', 999 );


// Remove Header and background
function remove_customize_header_background(){
    global $submenu;
    unset($submenu['themes.php'][20]); 			// For Background
    unset($submenu['themes.php'][15]); 			// For header
}
add_action('admin_menu', 'remove_customize_header_background', 999);


// Remove widgets from the WordPress Dashboard
function remove_dashboard_meta() {
    // remove_action('welcome_panel', 'wp_welcome_panel'); //Removes the 'welcome panel' widget
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
    remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
}
add_action('admin_init', 'remove_dashboard_meta');


// Remove tags support from posts
function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');


// disable install new theme
function __block_caps( $caps, $cap ) {
    if ( $cap === 'install_themes' )
        $caps[] = 'do_not_allow';
    return $caps;
}
add_filter( 'map_meta_cap', '__block_caps', 10, 2 );


// Remove “Comment” column in all post-types
function disable_comments() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if(post_type_supports($post_type,'comments')) {
            remove_post_type_support($post_type,'comments');
            remove_post_type_support($post_type,'trackbacks');
        }
    }
}
add_action('admin_init','disable_comments');


// Remove Comments from bar
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );


// changing the logo link from wordpress.org to your site
function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'mb_login_url' );


// changing the alt text on the logo to show your site name
function mb_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'mb_login_title' );


// changing the login logo
function custom_loginlogo() {
echo '<style type="text/css">
		h1 a {background-image: url(' . get_bloginfo('template_directory') . '/img/logo.svg) !important; }
	</style>';
}
add_action('login_head', 'custom_loginlogo');



// randomize upload filenames 
function htg_randomize_uploaded_filename( $filename ) {

	// does it have an extension? grab it
    $ext  = empty( pathinfo( $filename )['extension'] ) ? '' : '.' . pathinfo( $filename )['extension'];

    // return the first 8 characters of the MD5 hash of the name, along with the extension
    return substr(md5($filename), 0, 8) . $ext;
}

add_filter( 'sanitize_file_name', 'htg_randomize_uploaded_filename', 10 );




// Exclude logo from the lazy loading
function exclude_src( array $excluded_src ) {

	// EDIT/REPLACE THESE EXAMPLES:

	$excluded_src[] = 'https://www.brande.ae/wp-content/themes/brande/img/logo.svg'; // <img src="example?query=image.jpg">

	// STOP EDITING.

	return $excluded_src;
}
add_filter( 'rocket_lazyload_excluded_src', 'exclude_src' );


/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );


// Redirect to thank you page
add_action( 'wp_footer', 'redirect_cf7' );

function redirect_cf7() {
    ?>
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '239' == event.detail.contactFormId ) {
                location = 'https://www.brande.ae/thank-you/';
            } else {
                location = 'https://www.brande.ae/thank-you/';
            }
        }, false );
    </script>
    <?php
}




