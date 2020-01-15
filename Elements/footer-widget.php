<aside class="footer-widget">

  <div class="row">
    <?php
    if( !$this->BcBaser->isBlog() ) {
      echo '<div class="footer-widget__content col-md-6">';
        $this->BcBaser->globalMenu();
      echo '</div>';
      echo '<div class="footer-widget__content col-md-6">';
        $this->BcBaser->widgetArea(2);
      echo '</div>';
    } else { /* blog-page */
      echo '<div class="footer-widget__content col-md-4">';
        $this->BcBaser->globalMenu();
      echo '</div>';
      echo '<div class="footer-widget__content col-md-4">';
        $this->BcBaser->widgetArea(1);
      echo '</div>';
      echo '<div class="footer-widget__content col-md-4">';
        $this->BcBaser->widgetArea(2);
      echo '</div>';
    } ?>
  </div>

</aside>