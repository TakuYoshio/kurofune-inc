<?php
/** 料金体系 */
$price = $args['price'];
$img   = get_theme_file_uri('images/lp/care/');
?>
<section class="sec price" id="price" aria-labelledby="price-title">
  <div class="sec__inner">
    <img class="price__ill price__ill--coins" src="<?php echo esc_url($img . 'ill-coins.svg'); ?>" alt="" width="200" height="144" loading="lazy">
    <img class="price__ill price__ill--calc" src="<?php echo esc_url($img . 'ill-calc.svg'); ?>" alt="" width="200" height="118" loading="lazy">
    <div class="sec__head--center">
      <span class="eyebrow reveal">PRICE</span>
      <h2 class="sec__title reveal" id="price-title" style="--d:1"><?php echo kurofune_lp_text($price['title']); ?></h2>
      <p class="price__note reveal" style="--d:2"><?php echo kurofune_lp_text($price['note']); ?></p>
    </div>
    <div class="price__cards">
      <div class="pcard pcard--zero reveal" style="--d:1">
        <span class="pcard__ribbon">ZERO FEE</span>
        <p class="pcard__label">人材紹介手数料</p>
        <p class="pcard__value" aria-label="0円"><span class="big0" aria-hidden="true">0</span><span class="unit" aria-hidden="true">円</span></p>
        <p class="pcard__sub">※一般的な相場30万〜60万円が無料！</p>
      </div>
      <div class="pcard reveal" style="--d:2">
        <p class="pcard__label">定着支援費用（月額）</p>
        <p class="pcard__value" aria-label="19,800円 / 人"><span class="num" aria-hidden="true">19,800</span><span class="unit" aria-hidden="true">円</span><span class="per" aria-hidden="true">/ 人</span></p>
        <p class="pcard__sub">KUROFUNE PASSPORTによる定着支援</p>
      </div>
    </div>
    <p class="price__foot reveal"><?php echo kurofune_lp_text($price['foot']); ?></p>
  </div>
</section>
