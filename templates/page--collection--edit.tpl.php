<?php
include drupal_get_path('theme', 'sitebuilder_uva') . '/templates/includes/header.inc';
?>
<div id="container">

  <div id="content">
    <div id="page_content">
      <?php print $messages; ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

<!--       <ul class="item-navigation">
        <li><span><?php //print l(t('View'), 'view', array('attributes' => array('class' => 'view'))); ?></span></li>
      </ul> -->
        <?php print render($page['content']); ?>
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