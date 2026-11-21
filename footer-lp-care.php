<?php
/** 業種別LP（介護）フッター */
$lp = kurofune_get_lp();
$lp_footer_nav = array(
  'problem'  => 'お悩み・課題',
  'solution' => '3つの強み',
  'flow'     => '8ステップ',
  'price'    => '料金体系',
  'seminar'  => '説明会',
  'case'     => '試算例',
  'faq'      => 'よくある質問',
  'contact'  => 'お問い合わせ',
);
$lp_open = !post_password_required();
?>
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__top">
        <div>
          <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="KUROFUNE トップへ">
            <?php get_template_part('parts/lp-care/logo', null, array('id' => 'footer')); ?>
          </a>
          <p class="footer__desc"><?php echo kurofune_lp_text($lp['footer']['desc']); ?></p>
        </div>
        <?php if ($lp_open) : ?>
          <nav aria-label="ページ内リンク">
            <ul class="footer__nav">
              <?php foreach ($lp_footer_nav as $id => $label) : ?>
                <li><a href="#<?php echo esc_attr($id); ?>"><?php echo esc_html($label); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </nav>
          <div>
            <?php get_template_part('parts/lp-care/btn'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="footer__bottom">
        <a class="footer__privacy" href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" target="_blank" rel="noopener">プライバシーポリシー<svg viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M5 2H2v8h8V7M7 2h3v3M10 2 5.5 6.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <p class="footer__copy"><small>&copy; KUROFUNE Inc. All Rights Reserved.</small></p>
      </div>
    </div>
  </footer>

  <?php if ($lp_open) : ?>
    <div class="sticky-cta" id="lp-sticky-cta" aria-hidden="true">
      <?php get_template_part('parts/lp-care/btn', null, array('attr' => ' tabindex="-1"')); ?>
    </div>
  <?php endif; ?>

  <?php wp_footer(); ?>
  <script>
    (function () {
      var root = document.body;
      // 読み込み後にFVの要素を順に表示する
      requestAnimationFrame(function () {
        requestAnimationFrame(function () { root.classList.add('is-loaded'); });
      });

      // スクロールしたらヘッダーに影を付ける
      var header = document.getElementById('lp-header');
      var updateHeader = function () {
        header.classList.toggle('is-scrolled', window.scrollY > 12);
      };
      updateHeader();
      window.addEventListener('scroll', updateHeader, { passive: true });

      var hasIO = 'IntersectionObserver' in window;

      // 追従CTA（SP）：FVのボタンが画面外に出たら表示し、お問い合わせフォームが見えている間は隠す
      (function () {
        var cta = document.getElementById('lp-sticky-cta');
        var fvBtn = document.querySelector('.fv .btn-cta');
        var contact = document.getElementById('contact');
        if (!cta || !fvBtn || !hasIO) return;
        var link = cta.querySelector('a');
        var visible = { fv: true, contact: false };
        var render = function () {
          var show = !visible.fv && !visible.contact;
          cta.classList.toggle('is-show', show);
          cta.setAttribute('aria-hidden', show ? 'false' : 'true');
          link.setAttribute('tabindex', show ? '0' : '-1');
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

      // スクロールで要素をふわっと表示
      var items = document.querySelectorAll('.reveal');
      if (hasIO) {
        var io = new IntersectionObserver(function (entries) {
          entries.forEach(function (e) {
            if (e.isIntersecting) {
              e.target.classList.add('is-in');
              io.unobserve(e.target);
            }
          });
        }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
        items.forEach(function (el) { io.observe(el); });
      } else {
        items.forEach(function (el) { el.classList.add('is-in'); });
      }

      // FAQ：開閉を高さアニメーションでなめらかに（＋／－の切り替えは is-open で行う）
      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      document.querySelectorAll('.qa').forEach(function (item) {
        var summary = item.querySelector('summary');
        var answer = item.querySelector('.qa__a-wrap');
        var anim = null;
        item.classList.toggle('is-open', item.open);
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
