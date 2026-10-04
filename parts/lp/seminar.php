<?php
/** オンライン説明会（日程は管理画面「オンライン説明会」から取得） */
$seminar  = $args['seminar'];
$schedule = kurofune_get_upcoming_seminars($args['slug']);

// 下部ボタンは、申し込み可能な直近の説明会へ。無ければフォームへ
$apply_url = '';
foreach ($schedule as $item) {
  if ($item['status'] !== 'full' && $item['url']) {
    $apply_url = $item['url'];
    break;
  }
}
?>
<section class="lp-seminar lp-sec lp-sec--dark" id="seminar">
  <div class="lp-sec__head">
    <p class="lp-sec__en">SEMINAR</p>
    <p class="lp-seminar__tag">【無料オンラインセミナー開催】</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($seminar['title']); ?></h2>
  </div>
  <div class="lp-seminar__body">
    <div class="lp-seminar__img">
      <img src="<?php echo esc_url(get_theme_file_uri($seminar['image'])); ?>" alt="オンライン説明会のイメージ" width="560" height="441" loading="lazy">
    </div>
    <div class="lp-seminar__info">
      <p class="lp-seminar__text"><?php echo kurofune_lp_text($seminar['text']); ?></p>

      <?php if ($schedule) : ?>
        <ul class="lp-seminar__dates">
          <?php foreach ($schedule as $i => $item) :
            $is_full = $item['status'] === 'full';
            $tag     = (!$is_full && $item['url']) ? 'a' : 'div';
            ?>
            <li>
              <<?php echo $tag; ?> class="lp-seminar__date<?php echo $is_full ? ' is-full' : ''; ?>"<?php if ($tag === 'a') : ?> href="<?php echo esc_url($item['url']); ?>" target="_blank" rel="noopener"<?php endif; ?>>
                <span class="lp-seminar__date-top">
                  <span class="lp-seminar__date-num">第<?php echo (int) ($i + 1); ?>回</span>
                  <span class="lp-seminar__date-status is-<?php echo esc_attr($item['status']); ?>"><?php echo esc_html(kurofune_seminar_status_label($item['status'])); ?></span>
                </span>
                <span class="lp-seminar__date-day"><?php echo esc_html(kurofune_format_seminar_date($item['date'])); ?></span>
                <span class="lp-seminar__date-time"><?php echo esc_html(kurofune_format_seminar_time($item['start'], $item['end'])); ?></span>
              </<?php echo $tag; ?>>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else : ?>
        <p class="lp-seminar__empty">現在、次回の日程を調整中です。<br>お問い合わせフォームよりお気軽にご相談ください。</p>
      <?php endif; ?>

      <dl class="lp-seminar__details">
        <?php foreach ($seminar['details'] as $key => $value) : ?>
          <div>
            <dt><?php echo esc_html($key); ?></dt>
            <dd><?php echo kurofune_lp_text($value); ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>

      <?php if ($apply_url) : ?>
        <a href="<?php echo esc_url($apply_url); ?>" class="lp-btn-gold" target="_blank" rel="noopener">
      <?php else : ?>
        <a href="#contact" class="lp-btn-gold">
      <?php endif; ?>
          <span><?php echo $apply_url ? '無料説明会の日程を見て申し込む' : '説明会について問い合わせる'; ?></span>
          <img src="<?php echo esc_url(get_theme_file_uri('images/lp/common/icon-arrow-circle-navy.svg')); ?>" alt="" width="22" height="22">
        </a>
    </div>
  </div>
</section>
