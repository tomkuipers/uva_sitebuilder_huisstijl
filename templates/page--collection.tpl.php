<?php
include drupal_get_path('theme', 'sitebuilder_uva') . '/templates/includes/header.inc';
?>
<div id="container">
  <div id="content">
    <div id="page_content">
      <?php print $messages; ?>

      <?php if (!empty($title)): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <div class="collection-holder">
        <?php print render($page['content']); ?>
      </div>

      <?php if (!empty($page['sidebar_first'])): ?>
        <div class="collection-information">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="footer">
    <?php print render($page['footer']); ?>
  </div>
</div>