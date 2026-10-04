<?php
/** 料金体系（全業種共通） */
$common = get_theme_file_uri('images/lp/common/');
?>
<section class="lp-price lp-sec">
  <img class="lp-price__illust lp-price__illust--coins" src="<?php echo esc_url($common . 'illust-coins.png'); ?>" alt="" width="200" height="144" loading="lazy">
  <img class="lp-price__illust lp-price__illust--calc" src="<?php echo esc_url($common . 'illust-calculator.png'); ?>" alt="" width="200" height="118" loading="lazy">
  <div class="lp-sec__head">
    <p class="lp-sec__en">PRICE</p>
    <h2 class="lp-sec__title">業界の常識を覆す、明朗会計</h2>
  </div>
  <div class="lp-price__cards">
    <div class="lp-price__card lp-price__card--fee">
      <p class="lp-price__label">人材紹介手数料</p>
      <p class="lp-price__value"><span class="lp-price__num">0</span><span class="lp-price__unit">円</span></p>
      <p class="lp-price__note">一般的な相場 <s>30万〜50万円</s> が無料！</p>
    </div>
    <p class="lp-price__plus" aria-hidden="true">＋</p>
    <div class="lp-price__card lp-price__card--monthly">
      <p class="lp-price__label">定着支援費用（月額）</p>
      <p class="lp-price__value"><span class="lp-price__num">19,800</span><span class="lp-price__unit">円 / 人</span></p>
      <p class="lp-price__note">入社後のオンライン定着支援費用のみ</p>
    </div>
  </div>
  <p class="lp-price__caption">※自社スキームの効率化により手数料0円を実現しています。</p>
</section>
