<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<section id="suggestion-box-popover">
      <div class="suggestion-box-popover-content fade-in-up sticky">
          <a href="/suggestion-box">Suggestion Box</a>
          <button onclick="closeSuggestionPopover()">X</button>
      </div>
</section>
<header id="header-nav">
<img src="<?php echo get_stylesheet_directory_uri();?>/img/cnnssa_logo.png" width="252" height="50">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<div id="translate-option" class="translate-section">
  <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
</div>
<body id="body-adjust-main" <?php body_class(); ?>>
<div id="container">