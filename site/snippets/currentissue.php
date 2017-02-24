<section id="currentissue">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>

  <ul>
    <?php foreach($data->children()->visible() as $project): ?>
      <li>
        <figure>
          <img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo $project->title()->html() ?>">
        </figure>
      </li>
    <?php endforeach ?>
  </ul>
</section>