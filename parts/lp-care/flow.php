<?php
/** 8ステップ */
$flow = $args['flow'];
$star = '<svg viewBox="0 0 12 12" aria-hidden="true"><path d="m6 .6 1.6 3.4 3.7.4-2.8 2.5.8 3.7L6 8.7 2.7 10.6l.8-3.7L.7 4.4l3.7-.4L6 .6Z"/></svg>';
?>
<section class="sec flow" id="flow" aria-labelledby="flow-title">
  <div class="sec__inner">
    <div class="flow__head">
      <span class="eyebrow reveal">8 STEPS</span>
      <h2 class="sec__title reveal" id="flow-title" style="--d:1"><?php echo kurofune_lp_text($flow['title']); ?></h2>
      <ul class="flow__keys reveal" style="--d:2">
        <?php foreach ($flow['keys'] as $key) : ?>
          <li><i aria-hidden="true"></i><?php echo esc_html($key); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <ol class="steps">
      <?php foreach ($flow['steps'] as $i => $step) :
        $no = $i + 1;
        ?>
        <li class="step<?php echo !empty($step['tag']) ? ' is-key' : ''; ?> reveal">
          <?php if (!empty($step['tag'])) : ?>
            <span class="step__tag"><?php echo $star; // 固定のSVG ?><?php echo esc_html($step['tag']); ?></span>
          <?php endif; ?>
          <span class="step__icon" aria-hidden="true"><?php get_template_part('parts/lp-care/icon', null, array('name' => $step['icon'])); ?></span>
          <div class="step__card">
            <span class="step__no" aria-hidden="true">STEP <?php echo (int) $no; ?></span>
            <h3><span class="sr-only">STEP <?php echo (int) $no; ?>：</span><?php echo kurofune_lp_text($step['title']); ?></h3>
            <p><?php echo kurofune_lp_text($step['text']); ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
    <div class="flow__cta cta-wrap reveal">
      <?php get_template_part('parts/lp-care/btn'); ?>
    </div>
  </div>
</section>
