<?php
/**
 * メールフォーム確認ページ
 */
$this->BcBaser->css('admin/jquery-ui/jquery-ui.min', array('inline' => true));
$this->BcBaser->js(array('admin/vendors/jquery-ui-1.11.4.min', 'admin/vendors/i18n/ui.datepicker-ja'), false);
if ($freezed) {
  $this->Mailform->freeze();
}
?>

<h1 class="main__article__h1"><?php $this->BcBaser->contentsTitle() ?></h1>

<?php $this->BcBaser->crumbsList(); ?>

<div class="wrap clearfix">
  <?php if ($freezed): ?>
    <h2>入力内容の確認</h2>
    <p>入力した内容に間違いがなければ「送信する」ボタンをクリックしてください。</p>
  <?php else: ?>

    <h2>入力フォーム</h2>

  <?php endif; ?>
  <div>
    <?php $this->BcBaser->flash() ?>
    <?php $this->BcBaser->element('mail_form') ?>
  </div>
</div>
