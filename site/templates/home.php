<?php
snippet('header'); 
?>
<div class="outer">
	<div class="hairline">
		<div id="gr"> </div>
				 <?php $items = $pages->first()->children(); 
			    // get the first element in a set of pages
			    $first = $items->first(); // first page in nav bar
			    $second = $items->find('project-b');
			    $third = $items->find('project-c');
			    $fourth = $items->find('project-d');
			    $fifth= $items->find('project-e');
			    $sixth= $items->find('project-f');
			    $seventh = $items->last();?>

		<div class="themecontainer">
			
			<img class="theme" src="././assets/images/splash_final.png" alt="FirstTheme">

		</div>
	
		<div id="themestatement">
			The diasporic identity is always in a process of becoming, one that doesn’t realize geographic borders. 
			Its expression is often lost in translation through the canon of visual and literal language. 
			How can we be in direct conversation with these issues through the same modes of communication that have become a 
			banal part of our daily lives? Those that can also be mobilized or neutralized? Modes of social media have 
			complicated the relationship with identity–and yet they affirm and enable its production. They have also helped 
			the diasporic individual find an online community–allowing conversations to happen that would have been geographically
			 impossible. Diaspora to diaspora forces you out of safety and out of habitual relationships. 
			 Interconnectedness can create a virtual neighborhood; a home outside of home.

		</div>
		

 		<div id="projectselector">
 			
	    	<a class="projectlinks" target="_blank" href="content/1-Projects/1-project-a/shadowimages.html"> <?php echo $first->title()->html();?> </a>
	    	
	   		<a class="projectlinks" target="_blank" href="content/1-Projects/2-project-b/RoxyNajvainterview.html"> <?php echo $second->title()->html(); ?> </a>
	   		<a class="projectlinks" target="_blank" href="content/1-Projects/3-project-c/isilegrikavukint.html"> <?php echo $third->title()->html(); ?> </a>
	   		<a class="projectlinks" target="_blank" href="content/1-Projects/4-project-d/shala.html"> <?php echo $fourth->title()->html(); ?> </a>
  			<a class="projectlinks" target="_blank" href="content/1-Projects/5-project-e/hibaali.html"> <?php echo $fifth->title()->html(); ?> </a>
  			<a class="projectlinks" target="_blank" href="content/1-Projects/6-project-f/MiyoVanStenis.html"> <?php echo $sixth->title()->html(); ?> </a>
  			<a class="projectlinks" target="_blank" href="content/1-Projects/7-project-g/jessika.html"> <?php echo $seventh->title()->html(); ?> </a>
  		</div>
  		
	</div>

</div>



