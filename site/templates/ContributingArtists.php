<?php snippet('header') ?>
<div class="hairline">
  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>
</div>
<?php snippet('footer') ?>