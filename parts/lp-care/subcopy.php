<?php
/** FV直下のサービス概要カード */
$sub = $args['subcopy'];
?>
<section class="fv-sub" aria-label="サービス概要">
  <div class="fv-sub__card reveal">
    <div class="fv-sub__top">
      <div class="fv-sub__brand" aria-hidden="true"><?php get_template_part('parts/lp-care/logo', null, array('id' => 'sub')); ?></div>
      <p class="fv__sub"><?php echo kurofune_lp_text($sub['text']); ?></p>
    </div>
    <ul class="fv__points">
      <?php foreach ($sub['points'] as $point) : ?>
        <li><?php get_template_part('parts/lp-care/icon', null, array('name' => $point['icon'], 'class' => 'fv__icon')); ?><span><?php echo kurofune_lp_text($point['text']); ?></span></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
