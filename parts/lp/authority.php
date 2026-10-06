<?php
/** 権威バッジ（PCはFV右下の円形、SPはサブコピー先頭の横長） */
$authority = $args['authority'];
?>
<div class="lp-fv__authority <?php echo esc_attr($args['class']); ?>">
  <div class="lp-fv__authority-row">
    <p class="lp-fv__authority-stars">★ ★ ★</p>
    <p class="lp-fv__authority-area"><?php echo esc_html($authority['area']); ?></p>
  </div>
  <div class="lp-fv__authority-row">
    <p class="lp-fv__authority-text"><?php echo esc_html($authority['text']); ?></p>
    <p class="lp-fv__authority-title"><?php echo esc_html($authority['title']); ?></p>
  </div>
</div>
