<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/destyle.css'); ?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/common.css'); ?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/slick.css'); ?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/slick-theme.css'); ?>">
  <?php /*?>トップページの場合<?php */?>
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/top.css'); ?>">
  <?php endif; ?>
  <?php /*?>固定ページの場合<?php */?>
  <?php if ( is_page('aboutus') ): ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/aboutus.css'); ?>">
  <?php endif; ?>
  <!-- ============ Google font ============ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.ico'); ?>" sizes="32x32">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.svg'); ?>" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri('images/favicon/apple-touch-icon.png'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <!-- ロゴのローディング -->
  <div id="loading">
    <div class="loading-logo">
      <img src="<?php echo get_theme_file_uri('images/Logo-kurofune.png'); ?>" alt="KUROFUNE Logo">
    </div>
  </div>
  <div class="wrap">
    <header id="header">
      <div class="header-container">
        <a href="/" class="logo">
          <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE Logo">
        </a>
        <nav class="header-nav">
          <ul>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS</a></li>
            <li class="menu-item"><a href="https://www.wantedly.com/companies/kurofune-inc" target="_blank">RECRUIT</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
          </ul>
        </nav>
        <div class="hamburger-menu">
          <button class="hamburger-overlay" aria-label="メニュー" aria-controls="overlay-menu" aria-expanded="false">
            <span class="hamburger-overlay__line"></span>
            <span class="hamburger-overlay__line"></span>
            <span class="hamburger-overlay__line"></span>
          </button>

          <nav id="overlay-menu" class="nav-overlay" aria-hidden="true">
            <div class="nav-overlay__content">
              <ul class="nav-overlay__list">
                <li class="nav-overlay__item"><a href="/" class="nav-overlay__link">HOME</a></li>
                <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/company/')); ?>" class="nav-overlay__link">COMPANY</a></li>
                <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="nav-overlay__link">NEWS</a></li>
                <li class="nav-overlay__item"><a href="https://www.wantedly.com/companies/kurofune-inc" class="nav-overlay__link">RECRUIT</a></li>
                <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-overlay__link">CONTACT</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>