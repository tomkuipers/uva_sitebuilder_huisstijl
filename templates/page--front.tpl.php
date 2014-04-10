<?php
include drupal_get_path('theme', 'sitebuilder_uva') . '/templates/includes/header.inc';
?>
<div id="container">
  <div id="content">
    <div id="spotlight">
      <div class="region">
        <?php print render($page['highlighted']); ?>
      </div>
    </div>
    <div id="page_content">
      <div class="region region-content">
        <?php print $messages; ?>

        <?php hide($page['content']['system_main']); ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
  <div id="footer">
    <?php print render($page['footer']); ?>
  </div>
</div>