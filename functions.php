<?php

// Add Scripts and Stylesheets
function iamtheme_scripts() {
  // Navbar
  wp_enqueue_style( 'iam-navbar', get_template_directory_uri() . '/css/iam-navbar.css' );
  // Slideshow
  wp_enqueue_style( 'iam-slideshow', get_template_directory_uri() . '/css/iam-slideshow.css' );
  wp_enqueue_script( 'iam-slideshow', get_template_directory_uri() . '/js/iam-slideshow.js', array(), false ,true );
  // Main
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  // Home Page
  wp_enqueue_style( 'iam-home', get_template_directory_uri() . '/css/iam-home.css' );
  // Blog Page
  wp_enqueue_style( 'iam-blog', get_template_directory_uri() . '/css/iam-blog.css' );
  // Posts
  wp_enqueue_style( 'iam-post', get_template_directory_uri() . '/css/iam-post.css' );
  // Comments
  wp_enqueue_style( 'iam-comments', get_template_directory_uri() . '/css/iam-comments.css' );
  // Pages
  wp_enqueue_style( 'iam-page', get_template_directory_uri() . '/css/iam-page.css' );

  // Footer
  wp_enqueue_style( 'iam-footer', get_template_directory_uri() . '/css/iam-footer.css' );

  // Font Awesome
  wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/js/fontawesome-all.js' );
}
add_action( 'wp_enqueue_scripts', 'iamtheme_scripts' );

// Add "defer" tag to font-awesome
function iamtheme_add_defer_attribute($tag, $handle) {
  if( 'font-awesome' !== $handle ) {
    return $tag;
  }
  return str_replace( ' src', ' defer="defer" src', $tag );
}
add_filter( 'script_loader_tag', 'iamtheme_add_defer_attribute', 10, 2 );

// Customizer Options
require get_template_directory() . '/extra-functions/customizer.php';

// Register Menus
function iamtheme_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'iamtheme_menus' );

// Custom Settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
      <?php
        settings_fields( 'section' );
        do_settings_sections( 'theme-options' );
        submit_button();
      ?>
    </form>
  </div>
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

//Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Google Plus
function setting_google_plus() { ?>
  <input type="text" name="google-plus" id="google-plus" value="<?php echo get_option( 'google-plus' ); ?>" />
<?php }

// Youtube
function setting_youtube() { ?>
  <input type="text" name="youtube" id="youtube" value="<?php echo get_option( 'youtube' ); ?>" />
<?php }

// Linkedin
function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'google-plus', 'Google Plus URL', 'setting_google_plus', 'theme-options', 'section' );
  add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
  add_settings_field( 'linkedin', 'Linkedin URL', 'setting_linkedin', 'theme-options', 'section' );

  register_setting( 'section', 'facebook' );
  register_setting( 'section', 'twitter' );
  register_setting( 'section', 'google-plus' );
  register_setting( 'section', 'youtube' );
  register_setting( 'section', 'linkedin' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Register sidebars and widgeted areas
function iamtheme_widgets_init() {
  register_sidebar( array(
    'name' => 'Blog right sidebar',
    'id' => 'blog_right_sidebar',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}
add_action( 'widgets_init', 'iamtheme_widgets_init' );

// Excerpts
// Get rid of [...] at end of excerpts
function new_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Theme Supports
// Title Tag
add_theme_support( 'title-tag' );

// Support Featured images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail( 150, 150 );

// Custom logo
function iamtheme_custom_logo_setup() {
  $defaults = array(
    'height'      => 50,
    'width'       => 300,
    'flex-height' => false,
    'flex-width'  => false,
    'header-text' => array('site-title', 'site-description'),
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'iamtheme_custom_logo_setup' );

// Custom Page Headers
// function iamtheme_custom_page_header_setup() {
//   $defaults = array(
//     'height'        => 150,
//     'width'         => 1500,
//     'uploads'       => true,
//     'header-text'   => true,
//     'default-image' => get_template_directory_uri() . '/res/default-header-image.jpeg',
//   );
//
//   add_theme_support( 'custom-header', $defaults );
// }
// add_action( 'after_setup_theme', 'iamtheme_custom_page_header_setup' );
?>
