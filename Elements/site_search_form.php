<?php
/**
 * [PUBLISH] サイト内検索フォーム
 */
if (Configure::read('BcRequest.isMaintenance')) {
  return;
}
if (!empty($this->passedArgs['num'])) {
  $url = array('plugin' => null, 'controller' => 'search_indices', 'action' => 'search', 'num' => $this->passedArgs['num']);
} else {
  $url = array('plugin' => null, 'controller' => 'search_indices', 'action' => 'search');
}
?>


<div class="section search-box">
  <?php
    echo $this->BcForm->create('SearchIndex', ['type' => 'get', 'url' => $url]);
    echo $this->BcForm->input('SearchIndex.q');
    echo $this->BcForm->hidden('SearchIndex.s', ['value' => 0]);
    echo $this->BcForm->submit('検索', array('div' => false, 'class' => 'submit_button'));
    echo $this->BcForm->end() ?>
</div>