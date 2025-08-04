    <div id="cta">
      <div class="cta-container">
        <div class="cta-buttons">
          <a href="https://www.wantedly.com/companies/kurofune-inc" class="btn white" target="_blank">
            <div class="btn-text">
              <div class="btn-text-en">RECRUIT</div>
              <div class="btn-text-jp">私たちと一緒に世界を繋げませんか？</div>
            </div>
            <img src="<?php echo get_theme_file_uri('images/arrow-green.svg'); ?>" alt="arrow">
          </a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn white">
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
    <footer id="footer" class="footer-obj">
      <div class="footer-obj women">
        <img src="<?php echo get_theme_file_uri('images/footer-obj-women.svg'); ?>" alt="Footer Object">
      </div>
      <div class="footer-obj ship">
        <img src="<?php echo get_theme_file_uri('images/footer-obj-ship.svg'); ?>" alt="Footer Object">
      </div>
      <div class="footer-container">
        <div class="info">
          <a href="/" class="logo">
            <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE Logo">
          </a>
          <div class="address">
            <p class="p-03">
              〒451-0042<br>
              愛知県名古屋市西区那古野2-14-1<br>
              なごのキャンパス2-10
            </p>
          </div>
        </div>
        <div class="footer-menu">
          <div class="menu">
            <ul>
              <!-- <li class="menu-item"><a href="<?php echo esc_url(home_url('/company/')); ?>">
                <p class="p-03">
                  KUROFUNEについて
                </p>
              </a></li> -->
              <li class="menu-item"><a href="https://prtimes.jp/main/html/searchrlp/company_id/48531" target="_blank">
                <p class="p-03">
                  新着情報
                </p>
              </a></li>
              <li class="menu-item"><a href="https://www.wantedly.com/companies/kurofune-inc" target="_blank">
                <p class="p-03">
                  採用情報
                </p>
              </a></li>
              <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">
                <p class="p-03">
                  お問い合わせ
                </p>
              </a></li>
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="<?php echo get_theme_file_uri('js/slick.min.js'); ?>"></script>
  <script src="<?php echo get_theme_file_uri('js/main.js'); ?>"></script>
</body>
</html>