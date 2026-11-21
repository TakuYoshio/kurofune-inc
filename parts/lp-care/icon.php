<?php
/**
 * 線画アイコン
 * $args['name']：アイコン名、$args['class']：svg の class（任意）
 */
$icons = array(
  'handshake' => array(48, 2.4, '<path d="M3 20l7-7 7 3"/><path d="M45 20l-7-7-9 3-8 5c-2 1.4-1.6 4.4 1 4.8 1.6.3 3.2-.2 4.4-1.2L32 21l9 9"/><path d="M10 13v15l11 10c1.6 1.4 4 1.3 5.4-.3"/><path d="M17 31l5 4"/><path d="M21 27l6 5"/><path d="M26 25l6 5"/><path d="M41 30l-9 8c-1.4 1.2-3.4 1.2-4.8 0"/>'),
  'coins'     => array(48, 2.4, '<ellipse cx="20" cy="12" rx="12" ry="5"/><path d="M8 12v7c0 2.8 5.4 5 12 5s12-2.2 12-5v-7"/><path d="M8 19v7c0 2.8 5.4 5 12 5"/><path d="M8 26v7c0 2.8 5.4 5 12 5"/><ellipse cx="32" cy="29" rx="10" ry="4.5"/><path d="M22 29v6c0 2.5 4.5 4.5 10 4.5s10-2 10-4.5v-6"/><path d="M22 35v4c0 2.5 4.5 4.5 10 4.5s10-2 10-4.5v-4"/>'),
  'cap'       => array(48, 2.4, '<path d="M3 18 24 9l21 9-21 9z"/><path d="M12 22v10c0 3 5.4 6 12 6s12-3 12-6V22"/><path d="M45 18v11"/><circle cx="45" cy="31" r="1.6" fill="currentColor"/>'),
  'medal'     => array(48, 2.4, '<circle cx="24" cy="18" r="11"/><path d="m24 12 1.9 3.9 4.3.6-3.1 3 .7 4.3-3.8-2-3.8 2 .7-4.3-3.1-3 4.3-.6z"/><path d="M17 27l-4 15 6-3 4 5 1-10"/><path d="M31 27l4 15-6-3-4 5"/>'),
  'users'     => array(48, 2.4, '<circle cx="24" cy="14" r="6"/><circle cx="11" cy="18" r="4.5"/><circle cx="37" cy="18" r="4.5"/><path d="M13 38c0-6.6 4.9-11 11-11s11 4.4 11 11"/><path d="M3 36c0-5 3.5-8.4 8-8.4 1.7 0 3.2.4 4.5 1.2"/><path d="M45 36c0-5-3.5-8.4-8-8.4-1.7 0-3.2.4-4.5 1.2"/>'),
  'doc'       => array(48, 2.4, '<path d="M12 4h17l9 9v29a2 2 0 0 1-2 2H12a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><path d="M29 4v9h9"/><path d="M17 23h14M17 30h14M17 37h9"/>'),
  'usercheck' => array(48, 2.4, '<circle cx="20" cy="15" r="7"/><path d="M6 40c0-7.7 6.3-13 14-13 3.3 0 6.3 1 8.6 2.6"/><path d="m30 36 4 4 9-9"/>'),
  'book'      => array(48, 2.4, '<path d="M24 12c-4-3-10-4-18-3v28c8-1 14 0 18 3 4-3 10-4 18-3V9c-8-1-14 0-18 3z"/><path d="M24 12v28"/>'),
  'pen'       => array(48, 2.4, '<path d="M30 8l10 10L18 40H8V30z"/><path d="M26 12l10 10"/><path d="M8 44h32"/>'),
  'clip'      => array(48, 2.4, '<rect x="10" y="8" width="28" height="36" rx="3"/><path d="M18 5h12v6H18z"/><path d="m17 27 5 5 9-10"/>'),
  'plane'     => array(48, 2.4, '<path d="M44 6 4 21l14 5 4 15 7-10 10 7z"/><path d="m18 26 16-13"/>'),
  'building'  => array(48, 2.4, '<path d="M8 44V12l14-6v38"/><path d="M22 18h18v26"/><path d="M4 44h40"/><path d="M13 16h4M13 23h4M13 30h4M27 25h4M27 32h4M33 25h2M33 32h2"/><path d="M14 44v-6h4v6"/>'),
  'mail'      => array(24, 1.8, '<rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="m4 7 8 6 8-6"/>'),
  'chevron'   => array(24, 2.4, '<path d="m9 5 7 7-7 7"/>'),
);
$name = isset($args['name']) ? $args['name'] : '';
if (!isset($icons[$name])) {
  return;
}
list($size, $stroke, $paths) = $icons[$name];
$class = isset($args['class']) ? $args['class'] : '';
?>
<svg<?php if ($class) : ?> class="<?php echo esc_attr($class); ?>"<?php endif; ?> viewBox="0 0 <?php echo (int) $size; ?> <?php echo (int) $size; ?>" fill="none" stroke="currentColor" stroke-width="<?php echo esc_attr($stroke); ?>" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $paths; // 固定のSVGパス ?></svg>
