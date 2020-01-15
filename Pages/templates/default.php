<?php
/**
  * 固定ページデフォルトテンプレート
  * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
  *
  * @copyright    Copyright (c) baserCMS Users Community
  * @link      http://basercms.net baserCMS Project
  * @package      Baser.View
  * @since      baserCMS v 2.0.0
  * @license      http://basercms.net/license/index.html
*/ ?>
  <h1 class="main__article__h1">
    <?php
    if ($this->BcBaser->isHome()):
      $this->BcBaser->siteName();
    else:
      $this->BcBaser->contentsTitle();
    endif; ?>
  </h1>
  <div class="wrap clearfix">
    <?php
    if(!$this->BcBaser->isHome()):
      $this->BcBaser->crumbsList();
    endif;
    $this->BcPage->content(); ?>
  </div>