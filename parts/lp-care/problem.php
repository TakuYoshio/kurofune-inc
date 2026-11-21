<?php
/** お悩み・課題 */
$problem = $args['problem'];
?>
<section class="problem" id="problem" aria-labelledby="problem-title">
  <div class="problem__inner">
    <div class="problem__head">
      <div>
        <span class="eyebrow reveal">PROBLEM</span>
        <h2 class="problem__title reveal" id="problem-title" style="--d:1"><?php echo kurofune_lp_text($problem['title']); ?></h2>
      </div>
      <p class="problem__intro reveal" style="--d:2"><?php echo kurofune_lp_text($problem['intro']); ?></p>
    </div>
    <ul class="problem__list">
      <?php foreach ($problem['items'] as $i => $item) : ?>
        <li class="problem__item reveal" style="--d:<?php echo (int) ($i + 1); ?>">
          <span class="problem__check" aria-hidden="true"><svg viewBox="0 0 16 16" fill="none"><path d="m3 8.5 3.2 3L13 4.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <p><?php echo kurofune_lp_text($item); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
