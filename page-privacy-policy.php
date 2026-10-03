<?php get_header(); ?>
  <main>
    <section id="sub-fv">
      <div class="sub-fv-title">
        <h1 class="sub-fv-title-jp"><?php the_title(); ?></h1>
        <h5 class="sub-fv-title-en">PRIVACY POLICY</h5>
      </div>
      <div class="sub-fv-image">
        <img src="<?php echo get_theme_file_uri('images/company/company-img.jpg'); ?>" alt="Sub page FKV">
      </div>
    </section>
    <section id="privacy-policy">
      <div class="obj__inner">
        <div class="container">
          <div class="privacy-policy-container">
            <div class="privacy-policy-inner">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
