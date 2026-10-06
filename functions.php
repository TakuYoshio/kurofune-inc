<?php
/**
 * KUROFUNE theme functions
 *
 * 業種別LP（投稿タイプ lp）とオンライン説明会（投稿タイプ seminar）を登録する。
 * news 投稿タイプはプラグイン側（CPT UI）で登録しているため、ここでは扱わない。
 */

/* =====================================================================
 * 投稿タイプ・タクソノミー
 * ===================================================================== */
function kurofune_register_post_types() {
  // 業種別LP（/lp/{slug}/）
  register_post_type('lp', array(
    'labels' => array(
      'name'          => '業種別LP',
      'singular_name' => '業種別LP',
      'add_new_item'  => '業種別LPを追加',
      'edit_item'     => '業種別LPを編集',
    ),
    'public'        => true,
    'has_archive'   => false,
    'menu_position' => 6,
    'menu_icon'     => 'dashicons-megaphone',
    'supports'      => array('title'),
    'rewrite'       => array('slug' => 'lp', 'with_front' => false),
    'show_in_rest'  => true,
  ));

  // オンライン説明会（個別ページは持たず、LP内に一覧表示する）
  register_post_type('seminar', array(
    'labels' => array(
      'name'          => 'オンライン説明会',
      'singular_name' => 'オンライン説明会',
      'add_new_item'  => 'オンライン説明会を追加',
      'edit_item'     => 'オンライン説明会を編集',
    ),
    'public'             => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_position'      => 7,
    'menu_icon'          => 'dashicons-calendar-alt',
    'supports'           => array('title'),
    'show_in_rest'       => true,
  ));

  // 対象業種（タームのスラッグ = 業種別LPのスラッグ）
  register_taxonomy('industry', array('seminar'), array(
    'labels' => array(
      'name'          => '対象業種',
      'singular_name' => '対象業種',
      'add_new_item'  => '対象業種を追加',
    ),
    'public'            => false,
    'show_ui'           => true,
    'show_admin_column' => true,
    'hierarchical'      => true,
    'show_in_rest'      => true,
  ));
}
add_action('init', 'kurofune_register_post_types');

// テーマ有効化時にパーマリンクを更新
function kurofune_flush_rewrite() {
  kurofune_register_post_types();
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'kurofune_flush_rewrite');

/* =====================================================================
 * カスタムフィールド（ACF）
 * ===================================================================== */
function kurofune_register_fields() {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key'      => 'group_kurofune_seminar',
    'title'    => '説明会情報',
    'fields'   => array(
      array(
        'key'            => 'field_kurofune_seminar_date',
        'label'          => '開催日',
        'name'           => 'seminar_date',
        'type'           => 'date_picker',
        'required'       => 1,
        'display_format' => 'Y/m/d',
        'return_format'  => 'Ymd',
        'first_day'      => 0,
      ),
      array(
        'key'            => 'field_kurofune_seminar_start',
        'label'          => '開始時刻',
        'name'           => 'seminar_start',
        'type'           => 'time_picker',
        'required'       => 1,
        'display_format' => 'H:i',
        'return_format'  => 'H:i',
        'wrapper'        => array('width' => '50'),
      ),
      array(
        'key'            => 'field_kurofune_seminar_end',
        'label'          => '終了時刻',
        'name'           => 'seminar_end',
        'type'           => 'time_picker',
        'display_format' => 'H:i',
        'return_format'  => 'H:i',
        'wrapper'        => array('width' => '50'),
      ),
      array(
        'key'           => 'field_kurofune_seminar_status',
        'label'         => '受付状態',
        'name'          => 'seminar_status',
        'type'          => 'select',
        'choices'       => array(
          'open'  => '受付中',
          'few'   => '残りわずか',
          'full'  => '満席',
        ),
        'default_value' => 'open',
        'return_format' => 'value',
      ),
      array(
        'key'          => 'field_kurofune_seminar_url',
        'label'        => '申込URL',
        'name'         => 'seminar_url',
        'type'         => 'url',
        'instructions' => 'Zoomウェビナーの登録ページなど、申し込み先のURLを入力してください。',
      ),
    ),
    'location' => array(
      array(
        array('param' => 'post_type', 'operator' => '==', 'value' => 'seminar'),
      ),
    ),
    'position' => 'acf_after_title',
  ));

  acf_add_local_field_group(array(
    'key'      => 'group_kurofune_lp',
    'title'    => 'LP設定',
    'fields'   => array(
      array(
        'key'          => 'field_kurofune_lp_hs_form_id',
        'label'        => 'HubSpot フォームID',
        'name'         => 'lp_hs_form_id',
        'type'         => 'text',
        'instructions' => '未入力の場合は、お問い合わせページと同じフォームを表示します。',
      ),
      array(
        'key'           => 'field_kurofune_lp_industry',
        'label'         => '表示する説明会の対象業種',
        'name'          => 'lp_industry',
        'type'          => 'taxonomy',
        'taxonomy'      => 'industry',
        'field_type'    => 'select',
        'return_format' => 'id',
        'allow_null'    => 1,
        'add_term'      => 0,
        'save_terms'    => 0,
        'load_terms'    => 0,
        'instructions'  => 'このLPに表示する説明会の対象業種を選んでください。未選択の場合は、LPと同じスラッグの対象業種の説明会を表示します。',
      ),
    ),
    'location' => array(
      array(
        array('param' => 'post_type', 'operator' => '==', 'value' => 'lp'),
      ),
    ),
  ));
}
add_action('acf/init', 'kurofune_register_fields');

/* =====================================================================
 * 管理画面：説明会一覧に開催日を表示し、開催日順に並べる
 * ===================================================================== */
function kurofune_seminar_columns($columns) {
  $new = array();
  foreach ($columns as $key => $label) {
    $new[$key] = $label;
    if ($key === 'title') {
      $new['seminar_date']   = '開催日時';
      $new['seminar_status'] = '受付状態';
    }
  }
  unset($new['date']);
  return $new;
}
add_filter('manage_seminar_posts_columns', 'kurofune_seminar_columns');

function kurofune_seminar_column_content($column, $post_id) {
  if ($column === 'seminar_date') {
    echo esc_html(kurofune_format_seminar_date(get_post_meta($post_id, 'seminar_date', true)));
    $start = get_post_meta($post_id, 'seminar_start', true);
    $end   = get_post_meta($post_id, 'seminar_end', true);
    if ($start) {
      echo ' ' . esc_html(kurofune_format_seminar_time($start, $end));
    }
  }
  if ($column === 'seminar_status') {
    echo esc_html(kurofune_seminar_status_label(get_post_meta($post_id, 'seminar_status', true)));
  }
}
add_action('manage_seminar_posts_custom_column', 'kurofune_seminar_column_content', 10, 2);

function kurofune_seminar_admin_order($query) {
  if (!is_admin() || !$query->is_main_query() || $query->get('post_type') !== 'seminar' || $query->get('orderby')) {
    return;
  }
  $query->set('meta_key', 'seminar_date');
  $query->set('orderby', 'meta_value');
  $query->set('order', 'DESC');
}
add_action('pre_get_posts', 'kurofune_seminar_admin_order');

/* =====================================================================
 * 説明会ヘルパー
 * ===================================================================== */

/**
 * 指定業種の今後の説明会を開催日の昇順で取得する
 */
function kurofune_get_upcoming_seminars($industry, $limit = 4) {
  $query = new WP_Query(array(
    'post_type'      => 'seminar',
    'post_status'    => 'publish',
    'posts_per_page' => $limit,
    'no_found_rows'  => true,
    'tax_query'      => array(
      array(
        'taxonomy' => 'industry',
        'field'    => is_numeric($industry) ? 'term_id' : 'slug',
        'terms'    => is_numeric($industry) ? (int) $industry : $industry,
      ),
    ),
    'meta_query'     => array(
      'seminar_date' => array(
        'key'     => 'seminar_date',
        'value'   => current_time('Ymd'),
        'compare' => '>=',
        'type'    => 'NUMERIC',
      ),
    ),
    'orderby'        => array('seminar_date' => 'ASC'),
  ));

  $seminars = array();
  foreach ($query->posts as $post) {
    $status     = get_post_meta($post->ID, 'seminar_status', true) ?: 'open';
    $seminars[] = array(
      'date'   => get_post_meta($post->ID, 'seminar_date', true),
      'start'  => get_post_meta($post->ID, 'seminar_start', true),
      'end'    => get_post_meta($post->ID, 'seminar_end', true),
      'status' => $status,
      'url'    => get_post_meta($post->ID, 'seminar_url', true),
    );
  }
  return $seminars;
}

/**
 * Ymd → 「10月16日(木)」
 */
function kurofune_format_seminar_date($ymd) {
  $date = DateTime::createFromFormat('Ymd', (string) $ymd, wp_timezone());
  if (!$date) {
    return '';
  }
  $weekdays = array('日', '月', '火', '水', '木', '金', '土');
  return $date->format('n月j日') . '(' . $weekdays[(int) $date->format('w')] . ')';
}

/**
 * 「14:00〜15:00」（ACF time_picker は H:i:s で保存されるため秒を落とす）
 */
function kurofune_format_seminar_time($start, $end = '') {
  $start = substr((string) $start, 0, 5);
  $end   = substr((string) $end, 0, 5);
  return $end ? $start . '〜' . $end : $start . '〜';
}

function kurofune_seminar_status_label($status) {
  $labels = array(
    'open' => '受付中',
    'few'  => '残りわずか',
    'full' => '満席',
  );
  return isset($labels[$status]) ? $labels[$status] : $labels['open'];
}

/* =====================================================================
 * 業種別LP
 * ===================================================================== */

/**
 * 表示中のLPの設定（lp/config/{スラッグ}.php）を返す。設定ファイルが無ければ null
 */
function kurofune_get_lp() {
  static $lp = false;
  if ($lp !== false) {
    return $lp;
  }
  $lp      = null;
  $post_id = get_queried_object_id();
  $slug    = get_post_field('post_name', $post_id);
  if (!is_singular('lp') || !preg_match('/^[a-z0-9-]+$/', (string) $slug)) {
    return $lp;
  }
  $file = get_theme_file_path('lp/config/' . $slug . '.php');
  if (!file_exists($file)) {
    return $lp;
  }
  $lp          = require $file;
  $lp['slug']  = $slug;
  $form_id     = function_exists('get_field') ? get_field('lp_hs_form_id', $post_id) : '';
  $industry    = function_exists('get_field') ? get_field('lp_industry', $post_id) : '';
  // 説明会の絞り込み：LP編集画面で選んだ対象業種（ID）、未選択ならLPのスラッグ
  $lp['industry'] = $industry ? (int) $industry : $slug;
  $lp['form']  = array(
    'portal_id' => '43920249',
    'form_id'   => $form_id ?: 'a797225a-ddb4-46ab-bfe3-28d33fcc941d',
  );
  return $lp;
}

/**
 * 設定ファイル内の文言を出力用に整形（<br> <em> <span> のみ許可）
 */
function kurofune_lp_text($text) {
  return wp_kses($text, array(
    'br'   => array('class' => true),
    'em'   => array(),
    'span' => array('class' => true),
  ));
}
