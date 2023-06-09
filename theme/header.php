<!DOCTYPE html>
<html id="no" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=0" />

    <?php include_once INCLUDES_DIR . 'google-tag-manager.php'; ?>
    <?php include_once INCLUDES_DIR . 'google-analytics.php'; ?>

  	<!--FAVICON-->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/social/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/social/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/social/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/social/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">  
    
    <?php wp_head();?>    
    <meta name="author" content="<?php bloginfo('name'); ?>" />
    
  </head>
  <body class="<?php 
  
  $fadeMenu = get_field("menu_fade", $post->ID);
  if ($fadeMenu) {
    echo ' fadeMenu';
  }

  $current_user = wp_get_current_user();
    if (user_can( $current_user, 'administrator' )) {
        echo ' adminbar';
    }
  ?>">
  <div class="preload">
    <div class="container" style="background-image:url('/wp-content/uploads/2023/06/Group-56-min-min.png')">
      <div class="inner">
        <div class="title">Prince St.</div>
        <div class="box">
          <div class="head">peek at our demostore.</div>
          <div class="subtext">Wellcome to our demo store. We are currently looking for alpha testers do develop more experimental stores. Dont hesitate to contact us</div>
          <span>If things take a minute, please sit tight. Loading times in production will be around around 5s.</span>
          <div class="box-btn">
              <div href="#" class="process" >
                🤖
                <p>Processing </p>
              </div>
              <div class="preview">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.47473 19.1579C2.14161 19.9019 0.5 18.9382 0.5 17.4115V2.40671C0.5 0.879999 2.14161 -0.083753 3.47473 0.660316L16.9165 8.1627C18.2835 8.92569 18.2835 10.8925 16.9165 11.6555L3.47473 19.1579Z" fill="white"/>
                </svg>
              </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="all">
