<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright    Copyright (c) baserCMS Users Community
 * @link      http://basercms.net baserCMS Project
 * @package      Blog.View
 * @since      baserCMS v 4.0.5
 * @license      http://basercms.net/license/index.html
 */

/**
 * タグ別記事一覧
 *
 * @var BcAppView $this
 */
$this->BcBaser->css(array('Blog.style'), array('inline' => false));
$this->BcBaser->setDescription($this->BcBaser->getContentsTitle() . __('のアーカイブ一覧です。'));
?>


<script>
$(function(){
  if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>


<h1 class="main__article__h1"><?php $this->BcBaser->contentsTitle() ?></h1>

<?php if (!empty($posts)):
  foreach ($posts as $post): ?>
  <div class="post">
    <h2><?php $this->Blog->postTitle($post) ?></h2>
    <?php $this->Blog->postContent($post, true, true, 100) ?>
    <div class="meta">
      <span><?php $this->Blog->postDate($post) ?></span>
      <span><?php $this->Blog->category($post) ?></span>
    </div>
    <?php if (!empty($post['BlogTag'])) : ?>
      <div class="tag">タグ：<?php $this->Blog->tag($post, ['crossing' => true]) ?></div>
    <?php endif ?>
  </div>
<?php endforeach; else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
<!-- pagination -->
<?php $this->BcBaser->pagination('simple'); ?>