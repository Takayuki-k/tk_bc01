<?php
/**
 * メールフォーム送信完了ページ
 */
if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']) {
  $this->Html->meta(array('http-equiv' => 'Refresh'), null, array('content' => '5;url=' . $mailContent['MailContent']['redirect_url'], 'inline' => false));
}
?>

<h1 class="main__article__h1"><?php $this->BcBaser->contentsTitle() ?></h1>

<?php $this->BcBaser->crumbsList(); ?>

<div class="wrap clearfix">
  <h2>メール送信完了</h2>
  <p>お問い合わせ頂きありがとうございました。</p>
  <p>確認次第、ご連絡させて頂きます。</p>
  <?php if ($mailContent['MailContent']['redirect_url']): ?>
    <p>※<?php echo __('%s 秒後にトップページへ自動的に移動します。', 5) ?></p>
    <p><a href="<?php $this->BcBaser->baseUrl(); ?>">移動しない場合はコチラをクリックしてください。≫</a></p>
  <?php endif; ?>
</div>
