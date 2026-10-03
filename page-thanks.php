<?php get_header(); ?>
  <main>
    <section id="sub-fv">
      <div class="sub-fv-title">
        <h1 class="sub-fv-title-jp"><?php the_title(); ?></h1>
        <h5 class="sub-fv-title-en">THANK YOU</h5>
      </div>
      <div class="sub-fv-image">
        <img src="<?php echo get_theme_file_uri('images/kasou/contact-fv.jpg'); ?>" alt="Sub page FKV">
      </div>
    </section>
    <section id="thanks">
      <div class="obj__inner">
        <div class="container">
          <div class="thanks-container">
            <p class="thanks-title">お問い合わせいただき<br class="sp">ありがとうございます。</p>
            <p class="thanks-text">
              送信いただいた内容を確認のうえ、<br class="sp">担当者よりご連絡いたします。<br>
              1 ～ 2 営業日以内にご連絡いたしますので、<br class="sp">今しばらくお待ちください。
            </p>
            <div class="btn-container">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="btn white">
                <span>TOPへ戻る</span>
                <img src="<?php echo get_theme_file_uri('images/arrow-green.svg'); ?>" alt="arrow">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
