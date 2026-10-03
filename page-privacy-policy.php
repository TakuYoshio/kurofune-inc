<?php get_header(); ?>
  <main>
    <section id="sub-fv">
      <div class="sub-fv-title">
        <h1 class="sub-fv-title-jp"><?php the_title(); ?></h1>
        <h5 class="sub-fv-title-en">PRIVACY POLICY</h5>
      </div>
      <div class="sub-fv-image">
        <img src="<?php echo get_theme_file_uri('images/privacy/privacy-img.webp'); ?>" alt="Sub page FKV">
      </div>
    </section>
    <section id="privacy-policy">
      <div class="obj__inner">
        <div class="container">
          <div class="privacy-policy-container">
            <div class="privacy-policy-inner">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( trim( get_the_content() ) !== '' ) : ?>
                  <?php /*?>管理画面で本文が入力されていればそちらを優先<?php */?>
                  <?php the_content(); ?>
                <?php else : ?>
                  <?php /*?>本文が空の場合はテーマ同梱の本文を表示<?php */?>
                  <?php get_template_part('parts/privacy-policy-content'); ?>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
