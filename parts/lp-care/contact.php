<?php
/** お問い合わせ（HubSpotフォーム） */
$form    = $args['form'];
$contact = $args['contact'];
?>
<section class="sec contact" id="contact" aria-labelledby="contact-title">
  <div class="contact__wrap">
    <div class="sec__head--center">
      <span class="eyebrow reveal">CONTACT</span>
      <h2 class="contact__title reveal" id="contact-title" style="--d:1"><?php echo kurofune_lp_text($contact['title']); ?></h2>
      <p class="contact__lead reveal" style="--d:2"><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/><path d="M8 4.5V8l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg><?php echo kurofune_lp_text($contact['text']); ?></p>
    </div>
    <div class="form-card reveal" style="--d:3">
      <p class="form-card__head"><svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><rect x="3" y="2.5" width="14" height="15" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M6.5 7h7M6.5 10h7M6.5 13h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>お問い合わせフォーム（無料）</p>
      <script src="https://js-na2.hsforms.net/forms/embed/<?php echo esc_attr($form['portal_id']); ?>.js" defer></script>
      <div class="hs-form-frame"
          data-region="na2"
          data-form-id="<?php echo esc_attr($form['form_id']); ?>"
          data-portal-id="<?php echo esc_attr($form['portal_id']); ?>"></div>
    </div>
  </div>
</section>
