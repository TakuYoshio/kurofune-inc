<?php get_header(); ?>
  <main>
    <section id="sub-fv">
      <div class="sub-fv-title">
        <h1 class="sub-fv-title-jp">ページが見つかりません</h1>
        <h5 class="sub-fv-title-en">404 NOT FOUND</h5>
      </div>
      <div class="sub-fv-image">
        <img src="<?php echo get_theme_file_uri('images/company/company-img.webp'); ?>" alt="Sub page FKV">
      </div>
    </section>
    <section id="not-found">
      <div class="obj__inner">
        <div class="container">
          <div class="thanks-container">
            <p class="thanks-title">お探しのページは<br class="sp">見つかりませんでした。</p>
            <p class="thanks-text">
              お探しのページは、移動または削除された可能性があります。<br>
              お手数ですが、トップページからお探しください。
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
