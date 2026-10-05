/**
 * サンクスページ到達を GA4 の generate_lead イベントとして計測する。
 *
 * HubSpot フォームのリダイレクト先に付与された ?submitted=1 がある場合のみ発火させ、
 * URL直打ち・ブックマーク・検索流入による過剰計測を防ぐ。
 * 発火後は history.replaceState でパラメータを除去し、リロードによる二重計測も防ぐ。
 *
 * gtag.js 構成（Google Site Kit / 直接設置）と GTM 構成の両方に対応。
 */
(function () {
  'use strict';

  if (new URLSearchParams(window.location.search).get('submitted') !== '1') return;

  var debug = window.location.search.indexOf('debug_tracking') > -1;

  var payload = {
    form_id: 'a797225a-ddb4-46ab-bfe3-28d33fcc941d',
    form_name: 'kurofune_contact',
    form_destination: 'hubspot',
    page_location: window.location.href
  };

  if (typeof window.gtag === 'function') {
    window.gtag('event', 'generate_lead', payload);
    if (debug) console.log('[tracking] generate_lead sent via gtag', payload);
  } else {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(Object.assign({ event: 'generate_lead' }, payload));
    if (debug) console.log('[tracking] generate_lead pushed to dataLayer', payload);
  }

  // リロード・履歴の戻りで再発火しないよう ?submitted=1 を URL から除去する。
  // debug_tracking 付きの検証時は手動リロードを繰り返せるよう除去しない。
  if (!debug && window.history && typeof window.history.replaceState === 'function') {
    var params = new URLSearchParams(window.location.search);
    params.delete('submitted');
    var query = params.toString();
    window.history.replaceState(null, '', window.location.pathname + (query ? '?' + query : '') + window.location.hash);
  }
})();
