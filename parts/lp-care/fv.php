<?php
/** FV */
$fv = $args['fv'];
?>
<section class="fv" aria-labelledby="fv-title">
  <figure class="fv__photo js-load" style="--d:0">
    <img src="<?php echo esc_url(get_theme_file_uri($fv['image'])); ?>" alt="<?php echo esc_attr($fv['image_alt']); ?>" width="640" height="427" fetchpriority="high">
    <div class="fv__badge js-load" style="--d:7">
      <?php get_template_part('parts/lp-care/badge-art'); ?>
      <p class="fv__badge-text"><?php echo kurofune_lp_text($fv['badge']); ?><b><?php echo esc_html($fv['badge_strong']); ?></b></p>
    </div>
  </figure>

  <div class="fv__body">
    <h1 class="fv__title-wrap" id="fv-title">
      <span class="fv__lead js-load" style="--d:1"><?php echo kurofune_lp_text($fv['lead']); ?></span>
      <span class="fv__program js-load" style="--d:2">
        <span class="fv__label"><span><?php echo esc_html($fv['label']); ?></span></span>
        <span class="fv__headline"><?php echo esc_html($fv['title']); ?><svg class="fv__swoosh" viewBox="0 0 600 22" preserveAspectRatio="none" aria-hidden="true"><defs><linearGradient id="swg" x1="0" x2="1"><stop offset="0" stop-color="#FFB070" stop-opacity=".2"/><stop offset=".45" stop-color="#F26A12"/><stop offset="1" stop-color="#FF8A2B" stop-opacity=".3"/></linearGradient></defs><path d="M4 16 C 160 4, 380 2, 596 10" stroke="url(#swg)" stroke-width="5" fill="none" stroke-linecap="round"/></svg></span>
      </span>
      <span class="fv__title">
        <span class="zero js-load" style="--d:3">
          <span class="zero__label">紹介手数料</span>
          <span class="zero__num"><span class="zero__0">0</span><span class="zero__yen">円で、</span></span>
        </span>
        <span class="fv__catch js-load" style="--d:4"><span class="fv__catch-line"><em><?php echo esc_html($fv['target']); ?></em></span><span class="fv__catch-line"><small><?php echo esc_html($fv['target_sub']); ?></small>を。</span></span>
      </span>
    </h1>
    <div class="cta-wrap js-load" style="--d:5">
      <?php get_template_part('parts/lp-care/btn'); ?>
    </div>
  </div>
</section>
