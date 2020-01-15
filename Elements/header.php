<header class="header">
  <nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-light container">

    <div class="header__logo">
      <?php $this->BcBaser->logo() ?>
      <h1><?php $this->BcBaser->siteName(); ?></h1>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-right">
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>">ホーム</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>company">会社概要</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>works">事業内容</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>news/">新着情報</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>contact/">お問い合わせ</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php $this->BcBaser->baseUrl(); ?>sitemap">サイトマップ</a></li>
      </ul>
    </div>
  </nav>
</header>
