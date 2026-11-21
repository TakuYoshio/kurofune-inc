<?php
/** 業種別LP（介護）ヘッダー */
$lp = kurofune_get_lp();
// パスワード保護中（正式公開前）は検索エンジンに載せない
$lp_protected = (bool) get_post_field('post_password', get_queried_object_id());
$lp_nav = array(
  'problem'  => 'お悩み・課題',
  'solution' => '3つの強み',
  'flow'     => '8ステップ',
  'price'    => '料金体系',
  'seminar'  => '説明会',
  'case'     => '試算例',
  'faq'      => 'よくある質問',
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <?php get_template_part('parts/gtm-head'); ?>
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('css/lp-care.css')); ?>?ver=<?php echo esc_attr(filemtime(get_theme_file_path('css/lp-care.css'))); ?>">
  <link rel="preload" as="image" href="<?php echo esc_url(get_theme_file_uri($lp['fv']['image'])); ?>" fetchpriority="high">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.ico'); ?>" sizes="32x32">
  <link rel="icon" href="<?php echo get_theme_file_uri('images/favicon/favicon.svg'); ?>" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri('images/favicon/apple-touch-icon.png'); ?>">
  <?php wp_head(); ?>
</head>
<body class="lp-care">
  <?php get_template_part('parts/gtm-body'); ?>
  <header class="header" id="lp-header">
    <div class="header__inner">
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="KUROFUNE トップへ">
        <?php get_template_part('parts/lp-care/logo', null, array('id' => 'header')); ?>
      </a>
      <?php if (!post_password_required()) : ?>
        <nav class="header__nav" aria-label="ページ内リンク">
          <ul>
            <?php foreach ($lp_nav as $id => $label) : ?>
              <li><a href="#<?php echo esc_attr($id); ?>"><?php echo esc_html($label); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <a class="header__cta" href="#contact">
          <?php get_template_part('parts/lp-care/icon', null, array('name' => 'mail')); ?>
          無料で問い合わせる
        </a>
      <?php endif; ?>
    </div>
  </header>
