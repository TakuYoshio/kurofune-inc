<?php
/** よくある質問 */
$faq = $args['faq'];
?>
<section class="sec faq" id="faq" aria-labelledby="faq-title">
  <div class="sec__inner">
    <div class="faq__head">
      <span class="eyebrow reveal">FAQ</span>
      <h2 class="sec__title reveal" id="faq-title" style="--d:1"><?php echo kurofune_lp_text($faq['title']); ?></h2>
    </div>
    <div class="faq__list">
      <?php foreach ($faq['items'] as $i => $item) : ?>
        <details class="qa reveal" style="--d:<?php echo (int) ($i + 1); ?>">
          <summary>
            <span class="qa__no" aria-hidden="true">Q</span>
            <span class="qa__q-text"><?php echo kurofune_lp_text($item['q']); ?></span>
            <span class="qa__toggle" aria-hidden="true"><svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M1.5 7h11"/><path class="qa__v" d="M7 1.5v11"/></svg></span>
          </summary>
          <div class="qa__a-wrap">
            <div class="qa__a"><span class="qa__a-mark" aria-hidden="true">A</span><p><?php echo kurofune_lp_text($item['a']); ?></p></div>
          </div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
