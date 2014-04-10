<div id="header">
  <div class="header_content">
    <div class="site_logo">
      <?php
       $logo_mobile = url(drupal_get_path('theme', 'sitebuilder_uva') . '/images/uva-logo-small.png');
        print l(theme('image', array('path' => $logo_mobile, 'title' => $site_name, 'alt' => $site_name, 'attributes' => array('class' =>'logo-mobile'))), '<front>', array('html' => TRUE));
        print l(theme('image', array('path' => $logo, 'title' => $site_name, 'alt' => $site_name, 'attributes' => array('class' =>'logo'))), '<front>', array('html' => TRUE));
      ?>
      <div class="site_title">
        UvA
      </div>
    </div>
    <div class="header-right">
      <?php /* search box */ ?>
      <?php print render($page['header']); ?>

      <?php /* User menu */ ?>
      <div class="user-custom-navigation">
        <?php if (user_is_logged_in()): ?>
          <?php print l(t('My Videos'), 'myassets'); ?>&nbsp;|&nbsp;<?php print l(t('My Collections'), 'mycollections'); ?>&nbsp;|&nbsp;<?php print l(t('My account'), 'user'); ?>
          <?php
          if (mediamosa_sb::access_may_upload()) {
            print '&nbsp;|&nbsp;' . l(t('Upload'), 'asset/upload');
          }
          print '&nbsp;|&nbsp;' . l(t('Logout'), 'user/logout');
          ?>
        <?php else:
          $user_url = 'user';
          drupal_alter('mediamosa_sb_theme_user_url', $user_url);
          print l(t('Sign in'), $user_url);
        endif;
        ?>
      </div>
    </div>
  </div>

  <?php print render($page['menu_bar']); ?>
</div>
