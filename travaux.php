<?php
$pagename = "travaux";
require "Model/db.php";
require "Service/configManager.php";
require "Service/infoManager.php";
require "Service/parcoursManager.php";
require "Service/experiencesManager.php";
require "Service/errorManager.php";
include "Template/header.php";
include "Template/nav.php";
$travaux = getProjects(connectToDataBase());
?>
<section id="travaux" class="row">
  <?php
  //On boucle pour afficher tous les produits contenus dans la variable products
  foreach ($travaux as $key => $travail)
  {
    ?>
    <div class="card mr-2 ml-3 mt-3 mb-3" style="width: 22rem;">
      <img class="card-img-top" src="<?php echo $travail['image_src'];?>" alt="Logo <?php echo $travail['titre'];?>" height="150">
      <hr class="my-4">
      <div class="card-body">
        <h5 class="card-title"><?php echo $travail['titre'];?></h5>
        <p class="card-text"><?php echo $travail['description'];?></p>
        <a href="<?php echo $travail['github'];?>" class="btn btn-primary mr-4">Lien GitHub <i class="fab fa-github"></i></a>
        <a href="<?php echo $travail['ghpage'];?>" class="btn btn-primary">GitHub Page <i class="fab fa-github"></i></a>
      </div>
    </div>
    <?php 
  }
  ?>
</section>
<?php include "Template/footer.php";?>