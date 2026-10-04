<?php
/** お問い合わせ（HubSpotフォーム） */
$form = $args['form'];
?>
<section class="lp-contact lp-sec lp-sec--dark" id="contact">
  <div class="lp-sec__head">
    <p class="lp-sec__en">CONTACT</p>
    <h2 class="lp-sec__title">まずは、お気軽にご相談ください</h2>
    <p class="lp-sec__lead"><?php echo kurofune_lp_text($args['contact']['text']); ?></p>
  </div>
  <div class="lp-contact__card">
    <script src="https://js-na2.hsforms.net/forms/embed/<?php echo esc_attr($form['portal_id']); ?>.js" defer></script>
    <div class="hs-form-frame"
        data-region="na2"
        data-form-id="<?php echo esc_attr($form['form_id']); ?>"
        data-portal-id="<?php echo esc_attr($form['portal_id']); ?>"></div>
  </div>
</section>
