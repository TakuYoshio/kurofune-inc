<?php
/** 課題喚起 */
$problem = $args['problem'];
$common  = get_theme_file_uri('images/lp/common/');
?>
<section class="lp-problem lp-sec">
  <img class="lp-problem__illust lp-problem__illust--right" src="<?php echo esc_url($common . 'illust-worker01.png'); ?>" alt="" width="48" height="194" loading="lazy">
  <img class="lp-problem__illust lp-problem__illust--left" src="<?php echo esc_url($common . 'illust-worker02.png'); ?>" alt="" width="48" height="230" loading="lazy">
  <div class="lp-sec__head">
    <p class="lp-sec__en">PROBLEM</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($problem['title']); ?></h2>
  </div>
  <ul class="lp-problem__list">
    <?php foreach ($problem['items'] as $item) : ?>
      <li class="lp-problem__item">
        <img src="<?php echo esc_url($common . 'icon-check-navy.svg'); ?>" alt="" width="28" height="28">
        <p><?php echo kurofune_lp_text($item); ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
