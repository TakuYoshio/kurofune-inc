<?php
/** 導入事例（試算例） */
$case = $args['case'];
?>
<section class="sec case" id="case" aria-labelledby="case-title">
  <div class="sec__inner">
    <div class="case__head">
      <span class="eyebrow reveal">CASE</span>
      <h2 class="sec__title reveal" id="case-title" style="--d:1"><?php echo kurofune_lp_text($case['title']); ?></h2>
    </div>
    <?php foreach ($case['items'] as $item) : ?>
      <article class="case__card reveal" style="--d:2">
        <figure class="case__media">
          <img src="<?php echo esc_url(get_theme_file_uri($item['image'])); ?>" alt="<?php echo esc_attr($item['alt']); ?>" width="640" height="427" loading="lazy">
        </figure>
        <div class="case__body">
          <div class="case__meta">
            <span class="case__tag"><?php echo esc_html($item['tag']); ?></span>
          </div>
          <h3 class="case__title"><?php echo kurofune_lp_text($item['label']); ?></h3>
          <p class="case__text"><?php echo kurofune_lp_text($item['text']); ?></p>
          <?php if (!empty($item['notes'])) : ?>
            <ul class="case__notes">
              <?php foreach ($item['notes'] as $note) : ?>
                <li><?php echo kurofune_lp_text($note); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
