<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p):?>
    
    <li>
<!--       turn visible pages to variable--> 
    <?php $items = $pages->visible(); 
    // get the first element in a set of pages
    $first = $items->first(); // first page in nav bar
    $second = $items->find('about');
    $third = $items->find('ContributingArtists');
    $last = $items->last();

    ?>
    <a class="Projects" href="home" style="text-align: center;"> Current Issue </a>
    <a class="about" href="about"> <?php echo $second->title()->html(); ?> </a>
    <a class="ContributingArtists" href="ContributingArtists"> <?php echo $third->title()->html(); ?> </a>
    <a class="contact" href="contact" style="text-align: center;" > <?php echo $items->last()->title()->html(); ?> </a>
         
   <?php if($p->hasVisibleChildren()): ?>
 
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
    
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>

<!-- if class="CurrentIssue" redirect to link with class="home " -->

