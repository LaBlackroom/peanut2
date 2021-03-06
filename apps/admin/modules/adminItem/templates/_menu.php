<nav <?php if($sf_context->getModuleName() == 'adminItem' || $sf_context->getModuleName() == 'adminPage' || $sf_context->getModuleName() == 'adminLink'):
        echo 'class="selected"'; endif; ?>>
  <h3>
    <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'peanutCorporate'); ?>">
      <?php echo __('Manage items', null, 'peanutCorporate'); ?>
    </a>
  </h3>

  <ul>
    <li>
      <a href="<?php echo url_for('@peanut_item'); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Show items', null, 'peanutCorporate'); ?></a>
    </li>
    <?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>
    <li>
      <a href="<?php echo url_for('@peanut_page_new') ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Add new page', null, 'peanutCorporate');; ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('@peanut_link_new') ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Add new link', null, 'peanutCorporate'); ?></a>
    </li>
    <?php endif; ?>
  </ul>
</nav>