<?php
/**
 * オレンジのCTAボタン
 * $args['label']：ボタンの文言（省略時「今すぐ無料で問い合わせる（最短1分）」）、$args['href']、$args['attr']（追加属性）
 */
$label = isset($args['label']) ? $args['label'] : '';
$href  = isset($args['href']) ? $args['href'] : '#contact';
$attr  = isset($args['attr']) ? $args['attr'] : '';
?>
<a class="btn-cta" href="<?php echo esc_url($href); ?>"<?php echo $attr; // 呼び出し側で固定の属性のみ渡す ?>>
  <?php get_template_part('parts/lp-care/icon', null, array('name' => 'mail', 'class' => 'btn-cta__mail')); ?>
  <?php if ($label) : ?>
    <span><?php echo esc_html($label); ?></span>
  <?php else : ?>
    <span>今すぐ無料で問い合わせる<small>（最短1分）</small></span>
  <?php endif; ?>
  <span class="btn-cta__arrow" aria-hidden="true"><?php get_template_part('parts/lp-care/icon', null, array('name' => 'chevron')); ?></span>
</a>
