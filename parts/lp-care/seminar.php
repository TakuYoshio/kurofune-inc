<?php
/** オンライン説明会（日程は管理画面「オンライン説明会」から取得） */
$seminar  = $args['seminar'];
$schedule = kurofune_get_upcoming_seminars($args['industry']);

// 下部ボタンは、申し込み可能な直近の説明会へ。無ければフォームへ
$apply_url = '';
foreach ($schedule as $item) {
  if ($item['status'] !== 'full' && $item['url']) {
    $apply_url = $item['url'];
    break;
  }
}
?>
<section class="sec seminar" id="seminar" aria-labelledby="seminar-title">
  <div class="sec__inner seminar__grid">
    <figure class="seminar__photo reveal">
      <img src="<?php echo esc_url(get_theme_file_uri($seminar['image'])); ?>" alt="<?php echo esc_attr($seminar['alt']); ?>" width="1120" height="882" loading="lazy">
    </figure>
    <div>
      <span class="eyebrow reveal">SEMINAR</span>
      <h2 class="seminar__title reveal" id="seminar-title" style="--d:1">
        <span class="seminar__label"><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1.5" y="3" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.5"/><path d="M5 14.5h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>無料オンライン開催</span><br>
        <?php echo kurofune_lp_text($seminar['title']); ?>
      </h2>
      <p class="seminar__text reveal" style="--d:2"><?php echo kurofune_lp_text($seminar['text']); ?></p>
      <dl class="seminar__info reveal" style="--d:3">
        <div>
          <dt>日程</dt>
          <dd>
            <?php if ($schedule) : ?>
              <ul class="seminar__dates">
                <?php foreach ($schedule as $i => $item) :
                  $is_full = $item['status'] === 'full';
                  $tag     = (!$is_full && $item['url']) ? 'a' : 'div';
                  ?>
                  <li>
                    <<?php echo $tag; ?> class="seminar__date<?php echo $is_full ? ' is-full' : ''; ?>"<?php if ($tag === 'a') : ?> href="<?php echo esc_url($item['url']); ?>" target="_blank" rel="noopener"<?php endif; ?>>
                      <span class="seminar__date-num">第<?php echo (int) ($i + 1); ?>回</span>
                      <span class="seminar__date-day"><?php echo esc_html(kurofune_format_seminar_date($item['date'])); ?> <?php echo esc_html(kurofune_format_seminar_time($item['start'], $item['end'])); ?></span>
                      <span class="seminar__date-status is-<?php echo esc_attr($item['status']); ?>"><?php echo esc_html(kurofune_seminar_status_label($item['status'])); ?></span>
                    </<?php echo $tag; ?>>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              現在、次回の日程を調整中です。お問い合わせフォームよりお気軽にご相談ください。
            <?php endif; ?>
          </dd>
        </div>
        <?php foreach ($seminar['details'] as $key => $value) : ?>
          <div><dt><?php echo esc_html($key); ?></dt><dd><?php echo kurofune_lp_text($value); ?></dd></div>
        <?php endforeach; ?>
      </dl>
      <div class="cta-wrap reveal" style="--d:4">
        <?php
        if ($apply_url) {
          get_template_part('parts/lp-care/btn', null, array(
            'label' => '無料説明会の日程を見て申し込む',
            'href'  => $apply_url,
            'attr'  => ' target="_blank" rel="noopener"',
          ));
        } else {
          get_template_part('parts/lp-care/btn', null, array('label' => '説明会について問い合わせる'));
        }
        ?>
      </div>
    </div>
  </div>
</section>
