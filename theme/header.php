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
    <div class="container" style="background-image:url('/wp-content/uploads/2023/06/Group-56-min.png')">
      <div class="inner">
        <div class="title">Prince St.</div>
        <div class="box">
          <div class="head">peek at our demostore.</div>
          <div class="subtext">Wellcome to our demo store. We are currently looking for alpha testers do develop more experimental stores. Dont hesitate to contact us</div>
          <span>If things take a minute, please sit tight. Loading times in production will be around around 5s.</span>
          <div class="box-btn">
              <div href="#" class="process" >
                <img src="/wp-content/uploads/2023/06/🤖.png" alt=""> 
                <p>Processing...</p>
              </div>
              <div class="preview">
                <img src="/wp-content/uploads/2023/06/Frame-7.png" alt="">
              </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="all">
