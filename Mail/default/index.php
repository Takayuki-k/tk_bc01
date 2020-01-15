<?php
/**
 * メールフォーム
 */
$this->BcBaser->css('admin/jquery-ui/jquery-ui.min', array('inline' => true));
$this->BcBaser->js(array('admin/vendors/jquery-ui-1.11.4.min', 'admin/vendors/i18n/ui.datepicker-ja'), false);
?>

<h1 class="main__article__h1"><?php $this->BcBaser->contentsTitle() ?></h1>

<?php $this->BcBaser->crumbsList(); ?>

<div class="wrap clearfix">
  <?php $this->Mail->description() ?>

  <h2>入力フォーム</h2>

  <div>
    <?php $this->BcBaser->flash() ?>
    <?php $this->BcBaser->element('mail_form') ?>
  </div>
</div>