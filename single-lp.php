<?php
$lp = kurofune_get_lp();
if (!$lp) {
  global $wp_query;
  $wp_query->set_404();
  status_header(404);
  nocache_headers();
  get_template_part('404');
  return;
}
get_header('lp');
?>
  <main class="lp-main">
    <?php if (post_password_required()) : ?>
      <?php // パスワード保護中（公開前の確認用）はLP本体の代わりに入力画面を出す ?>
      <section class="lp-password">
        <div class="lp-password__card">
          <p class="lp-password__en">PROTECTED</p>
          <h1 class="lp-password__title"><?php echo esc_html(get_the_title()); ?></h1>
          <?php echo get_the_password_form(); ?>
        </div>
      </section>
    <?php else :
    foreach (array('fv', 'subcopy', 'problem', 'solution', 'flow', 'price', 'seminar', 'case', 'faq', 'contact') as $section) {
      get_template_part('parts/lp/' . $section, null, $lp);
    }
    endif;
    ?>
  </main>
<?php get_footer('lp'); ?>
