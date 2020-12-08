<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://kit.fontawesome.com/33391c5587.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<div class="topbar" id="home-topbar">
  During this national emergency, we need your help the most. Learn how you can <a href="/get-involved">get involved</a> today!
  <button onclick="closeTopbar()">X</button>
</div>
<section id="suggestion-box-popover">
      <div class="suggestion-box-popover-content fade-in-up sticky">
          <a href="/suggestion-box">Suggestion Box</a>
          <button onclick="closeSuggestionPopover()">X</button>
      </div>
</section>
<section id="popover">
      <div class="popover-content fade-in sticky donation-popover">
        <div class="content-wrapper">
            <button onclick="closePopover()">X</button>
        <h1>Help Homebound Seniors</h1>
        <h2>During COVID-19.</h2>
        <div class="donation-form-container">
          <a href="/donate" class="donate-button" target="_blank">Donate</a>
        </div>
      </div>
      </div>  
    </section>
<header id="header-nav" class="header-desktop-adjust">
<img src="<?php echo get_stylesheet_directory_uri();?>/img/cnnssa_logo.png" width="252" height="50">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<div id="translate-option" class="translate-section">
  <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
</div>
<body id="body-adjust" <?php body_class(); ?>>
<div id="container">