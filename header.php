<!-- Header, Navbar and meta data go here -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="full-body-div">
    <div class="iam-masthead">
      <div class="iam-logo-brand">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
        ?>
      </div>
      <nav class="iam-nav">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'header-menu'
          ));
        ?>
      </nav>
    </div>
