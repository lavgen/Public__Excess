<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <h3><?php echo $page->subtitle() ?></h3>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>


  </main>

<?php snippet('footer') ?>