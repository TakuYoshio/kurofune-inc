    <div id="cta">
      <div class="cta-container">
        <div class="cta-background">
          <img src="<?php echo get_theme_file_uri('images/cta-background.jpg'); ?>" alt="">
        </div>
        <div class="cta-buttons">
          <a href="https://www.wantedly.com/companies/kurofune-inc" class="btn" target="_blank">
            <div class="btn-text">
              <div class="btn-text-en">RECRUIT</div>
              <div class="btn-text-jp">私たちと一緒に世界を繋げませんか？</div>
            </div>
            <img src="<?php echo get_theme_file_uri('images/arrow-green.svg'); ?>" alt="arrow">
          </a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">
            <div class="btn-text">
              <div class="btn-text-en">CONTACT</div>
              <div class="btn-text-jp">お気軽にお問い合わせください</div>
            </div>
            <img src="<?php echo get_theme_file_uri('images/arrow-green.svg'); ?>" alt="arrow">
          </a>
        </div>
        <div class="cta-obj">
          <img src="<?php echo get_theme_file_uri('images/cta-KUROFUNE.svg'); ?>" alt="">
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
      <div class="footer-container">
        <div class="info">
          <a href="/" class="logo">
            <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE Logo">
          </a>
          <div class="address">
            <p>
              〒451-0042<br>
              愛知県名古屋市西区那古野2-14-1<br>
              なごのキャンパス2-10
            </p>
          </div>
        </div>
        <div class="footer-menu">
          <div class="menu">
            <ul>
              <li class="menu-item"><a href="<?php echo esc_url(home_url('/company/')); ?>">KUROFUNEについて</a></li>
              <li class="menu-item"><a href="<?php echo esc_url(home_url('/news/')); ?>">新着情報</a></li>
              <li class="menu-item"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
              <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copy-write">
        <small>
          &copy; KUROFUNE INC.
        </small>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
  <script src="<?php echo get_theme_file_uri('js/main.js'); ?>"></script>
</body>
</html>