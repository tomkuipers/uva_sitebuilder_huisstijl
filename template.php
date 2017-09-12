<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE:
 * http://drupal.org/node/254940#variables-processor
 *
 * 1. Rename each function and instance of "sitebuilder_uva" to match your
 *    subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace on
 *    "sitebuilder_uva".
 * 2. Uncomment the required function to use.
 */


/**
 * Override or insert variables for the page templates.
 */
function sitebuilder_uva_preprocess_page(&$vars) {
  // Provide a variable to all templates to test for a mobile context, this
  // requires the Browscap module and returns TRUE or FALSE.
}


/**
 * Shows listing of asset metadata.
 *
 * The theme used to generate a listing of metadata in the views using
 * mediamosa_ck_views_field_text_metadata. Slightly modified from the original:
 * no showing of empty rows.
 *
 * @param array $variables
 *   Data used for the theme.
 */
function sitebuilder_uva_mediamosa_ck_views_theme_asset_metadata($variables) {
  $rows = array();

  ksort($variables['metadata']);
  foreach ($variables['metadata'] as $name => $value) {
    if (is_array($value)) {
      $value = implode("\n", $value);
    }
    $name = drupal_ucfirst(str_replace('_', ' ', $name));
    if (empty($value)) {
      $rows[] = array('class' => array('empty'), 'data' => array('name' => $name, 'value' => ''));
    }
    else {
      $rows[] = array('data' => array('name' => $name, 'value' => nl2br(check_plain($value))));
    }
  }
  if (empty($rows)) {
    $rows[] = array('-', '');
  }

  return theme('table', array('rows' => $rows));
}

/**
 * Returns HTML for the Powered by MediaMosa.
 *
 * @ingroup themeable
 */
function sitebuilder_uva_mediamosa_sb_powered_by_mediamosa() {
  $image = theme('image', array(
             'path' => drupal_get_path('module', 'mediamosa_sb') . '/images/logo32.png',
             'alt' => t('Powered by MediaMosa'),
             'title' => t('Powered by MediaMosa'),
           )
  );
  $output = '<div class="mediamosa-logo-small">';
  $output .= l($image, 'http://mediamosa.org', array('attributes' => array(), 'html' => TRUE));
  $output .= '</div>';
  return $output;
}


/**
 * Implements template_process_html().
 *
 * Override or insert variables into the page template for HTML output.
 */
function sitebuilder_uva_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Implements template_process_page().
 */
function sitebuilder_uva_process_page(&$variables, $hook) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
}

/**
 * Create themed owner field.
 */
function sitebuilder_uva_mediamosa_ck_views_theme_owner($variables) {
  if (module_exists('surfconext')) {
    $u = user_load($variables['uid']);
    if (isset($u->display_name) && isset($u->display_name['und'][0]['value'])) {
      return $u->display_name['und'][0]['value'];
    }
    else {
      return '-';
    }
  }
  theme_mediamosa_ck_views_theme_owner($variables);
}
