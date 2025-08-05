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
  <?php if ( is_page('company') ): ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/company.css'); ?>">
  <?php endif; ?>
  <?php if ( is_page('contact') ): ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/contact.css'); ?>">
  <?php endif; ?>
  <!-- ============ Google font ============ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrap">
    <header id="header">
      <div class="header-container">
        <a href="/" class="logo">
          <img src="<?php echo get_theme_file_uri('images/logo-color.svg'); ?>" alt="KUROFUNE Logo">
        </a>
        <nav class="header-nav sub-page">
          <ul>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
            <li class="menu-item"><a href="https://prtimes.jp/main/html/searchrlp/company_id/48531" target="_blank">NEWS</a></li>
            <li class="menu-item"><a href="https://www.wantedly.com/companies/kurofune-inc" target="_blank">RECRUIT</a></li>
            <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
          </ul>
        </nav>
        <div class="hamburger-menu sub-page-humburger">
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
                <li class="nav-overlay__item"><a href="https://prtimes.jp/main/html/searchrlp/company_id/48531" target="_blank" class="nav-overlay__link">NEWS</a></li>
                <li class="nav-overlay__item"><a href="https://www.wantedly.com/companies/kurofune-inc" class="nav-overlay__link">RECRUIT</a></li>
                <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-overlay__link">CONTACT</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>