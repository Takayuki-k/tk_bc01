<?php
/**
 * 記事一覧
 */
?>
<!-- default/posts -->

<?php if (!empty($posts)):
  foreach ($posts as $post): ?>
  <div>
    <?php $this->Blog->postTitle($post) ?>
  </div>
<?php endforeach; else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
