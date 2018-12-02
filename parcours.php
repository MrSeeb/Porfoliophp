<?php
$pagename = "parcours";
//On charge les fichiers necessaires
require "Model/db.php";
require "Service/configManager.php";
require "Service/parcoursManager.php";
require "Service/infoManager.php";
require "Service/errorManager.php";
include "Template/header.php";
include "Template/nav.php";
$parcours = getParcours(connectToDataBase());
?>
<section id="parcours" class="row">
<?php
  //On boucle pour afficher tous les produits contenus dans la variable products
  foreach ($parcours as $key => $parcour)
  {
    ?>
    <div class="card mr-2 ml-3 mt-3 mb-3" style="width: 22rem;">
      <img class="card-img-top" src="<?php echo $parcour['image_src'];?>" alt="Logo <?php echo $parcour['titre'];?>" height="150">
      <hr class="my-4">
      <div class="card-body">
        <h5 class="card-title"><?php echo $parcour['titre'];?></h5>
        <p class="card-text"><?php echo $parcour['description'];?></p>
        <a href="<?php echo $parcour['url'];?>" class="btn btn-primary">Voir le site</a>
      </div>
    </div>
    <?php 
  }
  ?>
</section>
<?php include "Template/footer.php";?>