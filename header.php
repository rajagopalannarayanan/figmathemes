<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ✅ Bonus: SEO – Title tag and fallback -->
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <!-- ✅ Bonus: SEO – Meta description (optional, dynamic version can be added later via ACF or Yoast) -->
  <meta name="description" content="Novel Office provides customized, managed office spaces in Bangalore and the USA. Discover our flexible workspace solutions.">

  <!-- ✅ Bonus: Performance – Preconnect to fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- ✅ Bonus: Performance + Styling – Google Fonts optimized -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- ✅ Bonus: SEO – Favicons -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<header class="site-header" role="banner"> <!-- ✅ Bonus: Role attribute for semantic clarity -->
  <div class="container header-container">
    <div class="logo">
      <a href="<?php echo home_url(); ?>" aria-label="Go to homepage"> <!-- ✅ Bonus: Accessible link -->
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" 
          alt="Novel Office Logo" 
          loading="lazy" /> <!-- ✅ Bonus: Performance - Lazy loading -->
      </a>
    </div>

    <nav class="main-nav" role="navigation" aria-label="Main menu"> <!-- ✅ Bonus: Semantic nav & ARIA label -->
      <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'nav-links'
        ]);
      ?>
    </nav>
  </div>
</header>
