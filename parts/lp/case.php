<?php
/** 導入事例（試算例） */
$case = $args['case'];
?>
<section class="lp-case lp-sec">
  <div class="lp-sec__head">
    <p class="lp-sec__en">CASE</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($case['title']); ?></h2>
  </div>
  <ul class="lp-case__list">
    <?php foreach ($case['items'] as $item) : ?>
      <li class="lp-case__card">
        <div class="lp-case__img">
          <img src="<?php echo esc_url(get_theme_file_uri($item['image'])); ?>" alt="<?php echo esc_attr($item['alt']); ?>" width="588" height="300" loading="lazy">
        </div>
        <div class="lp-case__body">
          <p class="lp-case__tag"><?php echo esc_html($item['label']); ?></p>
          <p class="lp-case__voice"><?php echo kurofune_lp_text($item['text']); ?></p>
          <?php if (!empty($item['note'])) : ?>
            <p class="lp-case__note"><?php echo kurofune_lp_text($item['note']); ?></p>
          <?php endif; ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
