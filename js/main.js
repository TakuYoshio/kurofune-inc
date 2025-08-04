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

$(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase: "linear",
    slidesToShow: 4,
    swipe: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 3,
        }
      }
    ]
  });

  // 各画像が読み込まれた後に slick の再レイアウトを指示
  $('.slider img').on('load', function () {
    $('.slider').slick('setPosition');
  });
});


// ローディング アニメーション
window.addEventListener('load', function () {
  // ローディングの非表示処理（ロゴ表示後1.8秒後に消す）
  setTimeout(function () {
    document.getElementById('loading').classList.add('hide');
  }, 1800); // ロゴのfadeInアニメ時間（1.5s）＋余白
});