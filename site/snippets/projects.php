

<section id="projects">
  <?php echo $data->text()->kirbytext() ?>
  <ul>
    <?php foreach($data->children()->visible() as $project): ?>
        <div id="projectSections">
            <figure>              
              <?php echo $project->title()->kirbytext() ?>
              <?php echo $project->text()->kirbytext() ?>    
              </figure>
        </div>
        <div class="bottomborders"></div>
        
    <?php endforeach ?>
  </ul>
</section>