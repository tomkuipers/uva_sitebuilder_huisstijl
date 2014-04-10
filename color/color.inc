<?php
/**
 * @file
 * Color module settings for UvA.
 *
 * UvA colors from 'huisstijl':
 *
 * UvA black: #1f1d21;
 * UvA red:   #bc0031;
 * UvA white: #ffffff;
 * UvA blue:  #009cdd;
 * UvA grey1: #ededed;
 * UvA grey2: #dbdbdb;
 * UvA grey3: #999999;
 * UvA grey4: #666666;
 * UvA grey5: #333333;
 *
 * tekstkleur website: #231f20
*/

// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'sitebuilder_uva'))), 'setting');

$info = array();

// Available colors and color labels used in theme.
$info['fields'] = array(
  'header_bg' => t('Header background color'),
  'text' => t('Text color'),
  'link' => t('Links'),
  'heading' => t('Heading color'),
  'sloganbar' => t('Slogan background'),
  'slogantext' => t('Slogan text'),
  'featured_videos_bg' => t('Featured background'),
  'box' => t('Background UI Color'),
  'videohover' => t('Video Hover Color'),
);

// Pre-defined color schemes.
$info['schemes'] = array(
  'default' => array(
    'title' => t('Default'),
    'colors' => array(
      'text' => '#1f1d21',
      'base' => '#1f1d21',
      'header_bg' => '#ededed',
      'link' => '#bc0031',
      'heading' => '#bc0031',
      'sloganbar' => '#ededed',
      'slogantext' => '#1f1d21',
      'featured_videos_bg' => '#bc0031',
      'box' => '#ededed',
      'videohover' => '#bc0031',
    ),
  ),
);

// CSS files (excluding @import) to rewrite with new color scheme.
$info['css'] = array(
  'css/colors.css',
);

// Files to copy.
$info['copy'] = array(
  'images/logo.png',
);

// Gradient definitions.
$info['gradients'] = array(
  array(
    // (x, y, width, height).
    'dimension' => array(0, 0, 0, 0),
    // Direction of gradient ('vertical' or 'horizontal').
    'direction' => 'vertical',
    // Keys of colors to use for the gradient.
    'colors' => array('top', 'bottom'),
  ),
);

// Color areas to fill (x, y, width, height).
$info['fill'] = array();

// Coordinates of all the theme slices (x, y, width, height)
// with their filename as used in the stylesheet.
$info['slices'] = array();

// Reference color used for blending. Matches the base.png's colors.
$info['blend_target'] = '#ffffff';

// Preview files.
$info['preview_css'] = 'color/preview.css';
$info['preview_js'] = 'color/preview.js';
$info['preview_html'] = 'color/preview.html';

// Base file for image generation.
$info['base_image'] = 'color/base.png';

