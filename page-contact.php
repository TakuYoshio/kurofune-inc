<?php get_header(); ?>
  <main>
    <section id="sub-fv">
      <div class="sub-fv-title">
        <h1 class="sub-fv-title-jp"><?php the_title(); ?></h1>
        <h5 class="sub-fv-title-en">CONTACT</h5>
      </div>
      <div class="sub-fv-image">
        <img src="<?php echo get_theme_file_uri('images/kasou/contact-fv.jpg'); ?>" alt="Sub page FKV">
      </div>
    </section>
    <section id="contact-form">
      <div class="contact-form-container">
        <div class="contact-form-text">
          <p class="p-02">
            弊社サービスについてのご質問など、お気軽にご連絡ください。<br>
            1 ～ 2 営業日以内に、担当者よりお返事いたします。
          </p>
        </div>
        <div class="contact-form">
          <!-- フォーム設置場所（例：body内の適当な位置） -->
          <script src="https://js-na2.hsforms.net/forms/embed/43920249.js" defer></script>
          <div class="hs-form-frame"
              data-region="na2"
              data-form-id="a797225a-ddb4-46ab-bfe3-28d33fcc941d"
              data-portal-id="43920249">
          </div>
        </div>
        <!-- <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="b6eb11a" title="Contact-form"]' ); ?>
        </div> -->
      </div>
    </section>
  </main>
  <?php get_footer(); ?>