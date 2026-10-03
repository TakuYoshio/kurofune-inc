// overlay-script.js
document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.hamburger-overlay');
  const nav = document.querySelector('.nav-overlay');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');

    const isOpen = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isOpen);
    nav.setAttribute('aria-hidden', !isOpen);

    // メニューオープン時に背景スクロールを防止
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // ESCキーでメニューを閉じる
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) {
      hamburger.classList.remove('active');
      nav.classList.remove('active');
      hamburger.setAttribute('aria-expanded', false);
      nav.setAttribute('aria-hidden', true);
      document.body.style.overflow = '';
    }
  });
});

// ローディング アニメーション（トップページ・ブラウザを開いている間は初回のみ）
// 2回目以降は header-top.php で <html> に no-loading クラスが付き、CSSで非表示になる
window.addEventListener('load', function () {
  const loading = document.getElementById('loading');
  if (!loading || document.documentElement.classList.contains('no-loading')) return;

  // ロゴ表示後1.8秒後に消す（ロゴのfadeInアニメ時間（1.5s）＋余白）
  setTimeout(function () {
    loading.classList.add('hide');
  }, 1800);

  try {
    sessionStorage.setItem('kurofune_loading_shown', '1');
  } catch (e) {}
});
