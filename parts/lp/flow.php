<?php
/** 8ステップ */
$flow  = $args['flow'];
$arrow = get_theme_file_uri('images/lp/common/icon-step-arrow.svg');
$badges = array(
  'key'  => '★ 最重要',
  'risk' => 'リスクゼロの理由',
);
?>
<section class="lp-flow lp-sec">
  <div class="lp-sec__head">
    <p class="lp-sec__en">FLOW</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($flow['title']); ?></h2>
  </div>
  <ol class="lp-flow__panel">
    <?php foreach ($flow['steps'] as $i => $step) :
      $type = isset($step['type']) ? $step['type'] : '';
      ?>
      <li class="lp-flow__step<?php echo $type ? ' lp-flow__step--' . esc_attr($type) : ''; ?>">
        <div class="lp-flow__head">
          <p class="lp-flow__num">STEP <?php echo (int) ($i + 1); ?></p>
          <?php if ($type && isset($badges[$type])) : ?>
            <p class="lp-flow__badge"><?php echo esc_html($badges[$type]); ?></p>
          <?php endif; ?>
        </div>
        <h3 class="lp-flow__title"><?php echo kurofune_lp_text($step['title']); ?></h3>
        <p class="lp-flow__text"><?php echo kurofune_lp_text($step['text']); ?></p>
        <?php if ($i < count($flow['steps']) - 1) : ?>
          <img class="lp-flow__arrow" src="<?php echo esc_url($arrow); ?>" alt="" width="32" height="32">
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</section>
