  <footer class="lp-footer">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-footer__logo">
      <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE" width="200" height="32" loading="lazy">
    </a>
    <small class="lp-footer__copy">&copy; KUROFUNE Inc. All Rights Reserved.</small>
  </footer>
  <?php wp_footer(); ?>
  <script>
    // スクロールしたらヘッダーに背景色を付ける
    (function () {
      var header = document.getElementById('lp-header');
      var update = function () {
        header.classList.toggle('is-scrolled', window.scrollY > 40);
      };
      update();
      window.addEventListener('scroll', update, { passive: true });
    })();
  </script>
</body>
</html>
