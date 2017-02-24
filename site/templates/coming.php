
<?php snippet('header') ?>

<main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

    </div>
 
<!-- 	<?php echo thumb($page->image('finalgif.gif'), array('width' => 300)); ?>
 -->  
	<?php if($image = $page->image('finalgif.gif')): ?>
	
	<img src="<?php echo $image->url() ?>" alt="">
	<?php endif ?>

</main>


<?php snippet('footer') ?>