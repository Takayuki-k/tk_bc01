<?php
/**
 * ブログ詳細ページ
 */
$this->BcBaser->css('colorbox/colorbox', array('inline' => false));
$this->BcBaser->js('jquery.colorbox-min-1.4.5', false);
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->Blog->getPostContent($post, false, false, 50));
?>

<script>
$(function(){
  if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade", maxWidth:"80%", maxWidth:"80%"});
  });
</script>

<h1 class="main__article__h1"><?php $this->BcBaser->contentsTitle() ?></h1>

<div class="eye-catch">
  <?php echo $this->Blog->eyeCatch($post) ?>
</div>
<div class="post">
  <?php $this->Blog->postContent($post) ?>
  <div class="meta">
    <span><?php $this->Blog->postDate($post) ?></span><span><?php $this->Blog->category($post) ?></span>
  </div>
  <?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
</div>
<div class="post-navi">
<?php $this->Blog->prevLink($post) ?>
&nbsp;  &nbsp;
<?php $this->Blog->nextLink($post) ?>
</div>
