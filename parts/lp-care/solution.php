<?php
/** 解決策（3つの強み） */
$solution = $args['solution'];
?>
<section class="sec solution" id="solution" aria-labelledby="solution-title">
  <span class="solution__blob solution__blob--a" aria-hidden="true"></span>
  <span class="solution__blob solution__blob--b" aria-hidden="true"></span>
  <div class="sec__inner">
    <span class="eyebrow reveal">SOLUTION</span>
    <h2 class="solution__title reveal" id="solution-title" style="--d:1"><?php echo kurofune_lp_text($solution['title']); ?></h2>
    <ul class="strengths">
      <?php foreach ($solution['points'] as $i => $point) : ?>
        <li class="strength reveal" style="--d:<?php echo (int) ($i + 1); ?>">
          <span class="strength__num">STRENGTH <?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          <figure class="strength__photo">
            <img src="<?php echo esc_url(get_theme_file_uri($point['image'])); ?>" alt="<?php echo esc_attr($point['alt']); ?>" width="768" height="432" loading="lazy">
          </figure>
          <div class="strength__body">
            <?php get_template_part('parts/lp-care/icon', null, array('name' => $point['icon'], 'class' => 'strength__icon')); ?>
            <h3><?php echo kurofune_lp_text($point['title']); ?></h3>
            <p><?php echo kurofune_lp_text($point['text']); ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
