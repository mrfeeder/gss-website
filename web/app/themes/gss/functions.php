<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


add_action('init', 'gss_menu_name');
if (!function_exists('gss_menu_name')) {
  function gss_menu_name($wp_customize = FALSE) {
    if ($wp_customize) :
      $wp_customize->add_setting('gss_menu_name', array(
        'default' => 'Gssweb Primary Menu',
      ));
      $wp_customize->add_control('gss_menu_name', array(
        'label' => __('Main menu location name', 'gss'),
        'section' => 'gss_customize_header',
        'settings' => 'gss_menu_name',
      ));
      return;
    endif;
    register_nav_menus(array(
      'gssweb-primery-menu' => __(get_theme_mod('gss_menu_name', 'Gssweb Primary Menu')),
    ));

  }
}
