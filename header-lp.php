<?php
$lp = kurofune_get_lp();
// パスワード保護中（正式公開前）は検索エンジンに載せない
$lp_protected = (bool) get_post_field('post_password', get_queried_object_id());
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title><?php echo esc_html($lp['meta']['title']); ?></title>
  <?php if ($lp_protected) : ?>
    <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>
  <meta name="description" content="<?php echo esc_attr($lp['meta']['description']); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo esc_attr($lp['meta']['title']); ?>">
  <meta property="og:description" content="<?php echo esc_attr($lp['meta']['description']); ?>">
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri($lp['fv']['image'])); ?>">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/destyle.css'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;0,900;1,900&family=Zen+Kaku+Gothic+New:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/lp.css'); ?>">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.ico'); ?>" sizes="32x32">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.svg'); ?>" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri('images/favicon/apple-touch-icon.png'); ?>">
  <?php wp_head(); ?>
</head>
<body class="lp">
  <header class="lp-header" id="lp-header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-header__logo">
      <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE" width="200" height="32">
    </a>
    <?php if (!post_password_required()) : ?>
      <a href="#contact" class="lp-header__btn">無料で問い合わせる</a>
    <?php endif; ?>
  </header>
