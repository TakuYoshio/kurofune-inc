  <footer class="lp-footer">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-footer__logo">
      <img src="<?php echo get_theme_file_uri('images/Logo-white.svg'); ?>" alt="KUROFUNE" width="200" height="32" loading="lazy">
    </a>
    <small class="lp-footer__copy">&copy; KUROFUNE Inc. All Rights Reserved.</small>
  </footer>
  <a href="#contact" class="lp-fixed-cta" id="lp-fixed-cta" aria-hidden="true" tabindex="-1">
    <span>今すぐ無料で問い合わせる (最短1分)</span>
    <img src="<?php echo get_theme_file_uri('images/lp/common/icon-arrow-circle-white.svg'); ?>" alt="" width="24" height="24">
  </a>
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

    // 追従CTA：FVのボタンが画面外に出たら表示し、お問い合わせフォームが見えている間は隠す
    (function () {
      var cta = document.getElementById('lp-fixed-cta');
      var fvBtn = document.querySelector('.lp-fv__btn');
      var contact = document.getElementById('contact');
      if (!cta || !('IntersectionObserver' in window)) return;
      var visible = { fv: true, contact: false };
      var render = function () {
        var show = !visible.fv && !visible.contact;
        cta.classList.toggle('is-show', show);
        cta.setAttribute('aria-hidden', show ? 'false' : 'true');
        cta.setAttribute('tabindex', show ? '0' : '-1');
      };
      var observe = function (el, key) {
        if (!el) { visible[key] = false; return; }
        new IntersectionObserver(function (entries) {
          visible[key] = entries[0].isIntersecting;
          render();
        }).observe(el);
      };
      observe(fvBtn, 'fv');
      observe(contact, 'contact');
      render();
    })();

    // FAQ：開閉を高さアニメーションでなめらかに
    (function () {
      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      document.querySelectorAll('.lp-faq__item').forEach(function (item) {
        var summary = item.querySelector('summary');
        var answer = item.querySelector('.lp-faq__a');
        var anim = null;
        summary.addEventListener('click', function (e) {
          e.preventDefault();
          var opening = !item.classList.contains('is-open');
          item.classList.toggle('is-open', opening);
          if (reduce || !answer.animate) {
            item.open = opening;
            return;
          }
          // 途中で反転した場合は現在の高さから始める
          var from = anim ? answer.getBoundingClientRect().height : (opening ? 0 : answer.offsetHeight);
          if (anim) anim.cancel();
          item.open = true;
          var to = opening ? answer.scrollHeight : 0;
          anim = answer.animate(
            [{ height: from + 'px', opacity: opening ? 0 : 1 }, { height: to + 'px', opacity: opening ? 1 : 0 }],
            { duration: 320, easing: 'cubic-bezier(0.25, 0.8, 0.25, 1)' }
          );
          answer.style.overflow = 'hidden';
          anim.onfinish = function () {
            anim = null;
            answer.style.overflow = '';
            item.open = opening;
          };
        });
      });
    })();
  </script>
</body>
</html>
