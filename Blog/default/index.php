<?php
/**
 * ブログ一覧
 */
$this->BcBaser->css('colorbox/colorbox', array('inline' => false));
$this->BcBaser->js('jquery.colorbox-min-1.4.5', false);
$this->BcBaser->setDescription($this->Blog->getDescription());
?>
<!-- blog title -->

<script>
$(function(){
  if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade", maxWidth:"80%"});
  });
</script>

<h1 class="main__article__h1"><?php $this->Blog->title() ?></h1>

<!-- blog description -->
<?php if ($this->Blog->descriptionExists()): ?>
  <p class="blog-description">
  <?php $this->Blog->description() ?>
  </p>
<?php endif; ?>

<?php if (!empty($posts)):
  foreach ($posts as $post): ?>
  <div class="post">
    <h2><?php $this->Blog->postTitle($post) ?></h2>
    <?php $this->Blog->postContent($post, true, true, 100) ?>
    <div class="meta">
      <span><?php $this->Blog->postDate($post) ?></span>
      <span><?php $this->Blog->category($post) ?></span>
    </div>
    <?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
  </div>
<?php endforeach; else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
<!-- pagination -->
<?php $this->BcBaser->pagination('simple'); ?>