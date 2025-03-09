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
          弊社サービスについてのご質問など、お気軽にご連絡ください。<br>
          1 ～ 2 営業日以内に、担当者よりお返事いたします。
        </div>
        <div class="contact-form">
          <?php echo do_shortcode( '[contact-form-7 id="b6eb11a" title="Contact-form"]' ); ?>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>