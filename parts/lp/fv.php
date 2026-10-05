<?php
/** FV */
$fv = $args['fv'];
$common = get_theme_file_uri('images/lp/common/');
?>
<section class="lp-fv">
  <div class="lp-fv__bg">
    <img src="<?php echo esc_url(get_theme_file_uri($fv['image'])); ?>" alt="" width="1440" height="810" fetchpriority="high">
  </div>
  <div class="lp-fv__inner">
    <div class="lp-fv__content">
      <p class="lp-fv__lead"><?php echo kurofune_lp_text($fv['lead']); ?></p>
      <h1 class="lp-fv__title"><?php echo kurofune_lp_text($fv['title']); ?></h1>
      <div class="lp-fv__fee">
        <span class="lp-fv__fee-label">紹介手数料</span>
        <span class="lp-fv__fee-price"><span class="lp-fv__fee-zero">0</span>円で</span>
      </div>
      <p class="lp-fv__target"><?php echo kurofune_lp_text($fv['target']); ?></p>
      <a href="#contact" class="lp-fv__btn">
        <span>今すぐ無料で問い合わせる (最短1分)</span>
        <img src="<?php echo esc_url($common . 'icon-arrow-circle-white.svg'); ?>" alt="" width="24" height="24">
      </a>
    </div>
    <div class="lp-fv__authority">
      <div class="lp-fv__authority-row">
        <p class="lp-fv__authority-stars">★ ★ ★</p>
        <p class="lp-fv__authority-area"><?php echo esc_html($fv['authority']['area']); ?></p>
      </div>
      <div class="lp-fv__authority-row">
        <p class="lp-fv__authority-text"><?php echo esc_html($fv['authority']['text']); ?></p>
        <p class="lp-fv__authority-title"><?php echo esc_html($fv['authority']['title']); ?></p>
      </div>
    </div>
  </div>
  <p class="lp-fv__bg-text" aria-hidden="true">KUROFUNE INC.</p>
</section>
