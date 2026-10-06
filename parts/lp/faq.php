<?php
/** よくある質問 */
$faq = $args['faq'];
?>
<section class="lp-faq lp-sec">
  <div class="lp-sec__head">
    <p class="lp-sec__en">FAQ</p>
    <h2 class="lp-sec__title"><?php echo kurofune_lp_text($faq['title']); ?></h2>
  </div>
  <div class="lp-faq__list">
    <?php foreach ($faq['items'] as $i => $item) : ?>
      <details class="lp-faq__item<?php echo $i === 0 ? ' is-open' : ''; ?>"<?php echo $i === 0 ? ' open' : ''; ?>>
        <summary class="lp-faq__q">
          <span class="lp-faq__icon">Q</span>
          <span class="lp-faq__q-text"><?php echo kurofune_lp_text($item['q']); ?></span>
          <span class="lp-faq__toggle" aria-hidden="true"></span>
        </summary>
        <div class="lp-faq__a">
          <span class="lp-faq__icon lp-faq__icon--a">A</span>
          <p><?php echo kurofune_lp_text($item['a']); ?></p>
        </div>
      </details>
    <?php endforeach; ?>
  </div>
</section>
