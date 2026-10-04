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
    <?php
    foreach (array('fv', 'subcopy', 'problem', 'solution', 'flow', 'price', 'seminar', 'case', 'faq', 'contact') as $section) {
      get_template_part('parts/lp/' . $section, null, $lp);
    }
    ?>
  </main>
<?php get_footer('lp'); ?>
