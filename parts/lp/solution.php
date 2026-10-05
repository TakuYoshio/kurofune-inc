<?php
/** 解決策 */
$solution = $args['solution'];
?>
<section class="lp-solution lp-sec lp-sec--dark">
  <div class="lp-sec__head">
    <p class="lp-sec__en">SOLUTION</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($solution['title']); ?></h2>
  </div>
  <ul class="lp-solution__list">
    <?php foreach ($solution['points'] as $i => $point) : ?>
      <li class="lp-solution__card">
        <div class="lp-solution__img">
          <img src="<?php echo esc_url(get_theme_file_uri($point['image'])); ?>" alt="<?php echo esc_attr($point['alt']); ?>" width="384" height="216" loading="lazy">
        </div>
        <div class="lp-solution__body">
          <p class="lp-solution__num">POINT <?php echo esc_html(sprintf('%02d', $i + 1)); ?></p>
          <h3 class="lp-solution__title"><?php echo kurofune_lp_text($point['title']); ?></h3>
          <p class="lp-solution__emphasis"><?php echo kurofune_lp_text($point['emphasis']); ?></p>
          <p class="lp-solution__text"><?php echo kurofune_lp_text($point['text']); ?></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
