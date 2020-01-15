<?php
/**
 * デフォルトレイアウト
 */
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <?php
  // canonical
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://");
    if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
      $url = $url . substr($_SERVER['HTTP_HOST'], 4) . $_SERVER['REQUEST_URI'];
      // echo '<link rel="canonical" href="' . $url . '">';
      header("Location: $url", true, 301);
      exit(0);
    } else {
      $url = $url . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      echo '<link rel="canonical" href="' . $url . '">';
    }

    $this->BcBaser->title();
    $this->BcBaser->metaDescription();
    $this->BcBaser->metaKeywords();
    $this->BcBaser->css('style');
  // manifest
  ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
    $this->BcBaser->icon();
    $this->BcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss');
  ?>
  <meta name="theme-color" content="#e1fffe">
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">
  <div class="container">
    <?php $this->BcBaser->header() ?>

    <main class="main clearfix">
      <article class="main__article">
        <?php
          $this->BcBaser->content();
          // $this->BcBaser->element('toppage');
        ?>
      </article>
    </main>
    <section class="new-blog-title">
      <p class="bold">新着情報</p>
      <?php $this->BcBaser->blogPosts('news', 5); ?>
    </section>
    <?php $this->BcBaser->element('footer-widget') ?>
  </div><!-- container -->
  <?php $this->BcBaser->footer() ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write("<script src='js/jquery.js'><\/script>");
</script>
<?php
  $this->BcBaser->scripts();
  $this->BcBaser->googleAnalytics();
  $this->BcBaser->func(); ?>
</html>
