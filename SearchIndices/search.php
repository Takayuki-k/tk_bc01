<?php
/**
 * サイト内検索結果
 * SearchIndices/search.php
 * Core: lib/Baser/View/SearchIndices/search.php
 */
?>
<?php if (!empty($this->Paginator)): ?>
<h1 class="main__article__h1">検索結果</h1>
<p><?php echo $this->Paginator->counter(['format' => sprintf(__d('baser', '<strong>%s</strong> の検索結果 <strong>%%start%%〜%%end%%</strong>件目 / %%count%% 件'), implode(' ', $query))]) ?></p>
<?php endif ?>

<?php $this->BcBaser->element('list_num') ?>

<?php if ($datas):
  foreach ($datas as $data): ?>
  <div class="post">
    <h2><a href="<?php echo fullUrl(urldecode($data['SearchIndex']['url'])) ?>"><?php echo $this->BcBaser->mark($query, $data['SearchIndex']['title']) ?></a></h2>
      <?php echo $this->BcBaser->mark($query, $this->Text->truncate($data['SearchIndex']['detail'], 100)) ?>...<br>
      <p>
      <a href="<?php echo fullUrl(urldecode($data['SearchIndex']['url'])) ?>" class="more">≫ 続きを読む</a>
    </p>
  </div>
  <?php endforeach ?>
<?php else: ?>
<p><?php echo __d('baser', '該当する結果が存在しませんでした。')?></p>
<?php endif ?>

<?php $this->BcBaser->pagination(); ?>