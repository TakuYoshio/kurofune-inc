<?php
/** サブコピー */
$check = get_theme_file_uri('images/lp/common/icon-check-gold.svg');
?>
<section class="lp-subcopy">
  <?php get_template_part('parts/lp/authority', null, array('authority' => $args['fv']['authority'], 'class' => 'lp-fv__authority--subcopy')); ?>
  <p class="lp-subcopy__text"><?php echo kurofune_lp_text($args['subcopy']['text']); ?></p>
  <ul class="lp-subcopy__points">
    <li><img src="<?php echo esc_url($check); ?>" alt="" width="36" height="36"><span><small>初期費用</small>ゼロ</span></li>
    <li><img src="<?php echo esc_url($check); ?>" alt="" width="36" height="36"><span><small>月額</small>19,800<small>円のみ</small></span></li>
    <li><img src="<?php echo esc_url($check); ?>" alt="" width="36" height="36"><span><small>合格者のみ</small>入国</span></li>
  </ul>
</section>
