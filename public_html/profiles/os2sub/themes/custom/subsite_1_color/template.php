<?php
include( dirname(__FILE__) . '/include/settings.inc');

function subsite_1_color_process_html(&$variables) {
 if (module_exists('color')) {
 _color_html_alter($variables);
 }
}

function subsite_1_color_process_page(&$variables, $hook) {
  $search_box = drupal_render(drupal_get_form('search_form'));

  // Responsive.
  $search_box_responsive = str_replace('search-form', 'search-form-responsive', $search_box);
  $search_box_responsive = str_replace('edit-basic', 'edit-basic-responsive', $search_box_responsive);
  $search_box_responsive = str_replace('edit-keys', 'edit-keys-responsive', $search_box_responsive);
  $search_box_responsive = str_replace('edit-submit', 'edit-submit-responsive', $search_box_responsive);
  $variables['search_box_responsive'] = $search_box_responsive;

  $variables['search_box_desktop'] = $search_box;

  if (module_exists('color')) {
    _color_page_alter($variables);
  }
}

/**
 * Implements theme_preprocess_html().
 */
function subsite_1_color_preprocess_html(&$variables) {
  $theme_path = path_to_theme();

  // Add conditional stylesheets for IE9 and lower.
  drupal_add_css($theme_path . '/dist/css/stylesheet.css', array(
    'group'      => CSS_THEME,
  ));
  drupal_add_css($theme_path . '/dist/css/stylesheet-ie9-1.css', array(
    'group'      => CSS_THEME,
    'browsers'   => array('IE' => 'lte IE 9', '!IE' => FALSE),
  ));
  drupal_add_css($theme_path . '/dist/css/stylesheet-ie9-2.css', array(
    'group'      => CSS_THEME,
    'browsers'   => array('IE' => 'lte IE 9', '!IE' => FALSE),
  ));
  drupal_add_js($theme_path . '/dist/js/modernizr.js', array(
    'group'      => JS_LIBRARY,
  ));
  drupal_add_js($theme_path . '/dist/js/app.js', array(
    'group'      => JS_THEME,
  ));
  drupal_add_js($theme_path . '/dist/js/ie9.js', array(
    'group'      => JS_THEME,
    'browsers'   => array('IE' => 'lte IE 9', '!IE' => FALSE),
  ));

  // Add out fonts from Google Fonts API.

  drupal_add_html_head(array(
    '#tag'        => 'link',
    '#attributes' => array(
      'href' => 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|PT+Mono',
      'rel'  => 'stylesheet',
      'type' => 'text/css',
    ),
  ), 'google_font_subsite_1');

  // Body classes
  // $variables['classes_array'][] = 'footer-attached';

  $variables['classes_array'][] = 'simple-navigation-enabled-xs';
  $variables['classes_array'][] = 'simple-navigation-enabled-sm';

  $variables['classes_array'][] = 'main-navigation-enabled-md';
  $variables['classes_array'][] = 'main-navigation-enabled-lg';

  // Load jQuery UI
  drupal_add_library('system', 'ui');
}

/**
 * Implements template_preprocess_node.
 */
function subsite_1_color_preprocess_node(&$variables) {

  // Optionally, run node-type-specific preprocess functions, like
  // foo_preprocess_node_page() or foo_preprocess_node_story().
  $function_node_type = __FUNCTION__ . '__' . $variables['node']->type;
  $function_view_mode = __FUNCTION__ . '__' . $variables['view_mode'];
  if (function_exists($function_node_type)) {
    $function_node_type($variables);
  }
  if (function_exists($function_view_mode)) {
    $function_view_mode($variables);
  }
}

/**
 * Implements hook_preprocess_HOOK() for theme_file_icon().
 *
 * Change the icon directory to use icons from this theme.
 */
function subsite_1_color_preprocess_file_icon(&$variables) {
  $variables['icon_directory'] = drupal_get_path('theme', 'subsite_1_color') . '/dist/img/file-icons';
}

/*
 * Implements template_preprocess_comment().
 */
function subsite_1_color_preprocess_comment(&$variables) {
}

/*
 * Full node
 * Implements hook_preprocess_node().
 */
function subsite_1_color_preprocess_node__full(&$variables) {
}
/*
function subsite_1_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link_text = $link['title'];

  $page_args = unserialize($link['page_arguments']); // Gets the view name and display type
  // Could be useful if we want to restrict it to certain views and displays.

  $view = views_get_view($page_args[0]);
  $view->set_display($page_args[1]);
  $output = $view->preview();
/* If result is empty return here this hides the tab from showing up. However the page will still be visible when someone tries to visit the page directly. If we want to completely hide the view then the above solution is more appropriate.
*/
/* if (empty($view->result)) {
    return;
  }
   // code to genrate your li or however the theme creates tab markup

  return "<li>" . l($link_text, $link['href'], $link['localized_options']) . "</li>";
}
*/

/**
 * Checking the text in the search text box
 *
 * @param $form
 * @param $form_state
 * @param $form_id
 */
function subsite_1_color_form_search_form_alter(&$form, &$form_state, $form_id) {
  $form['basic']['keys']['#attributes']['placeholder'] = t('Hvad søger du?');
}
