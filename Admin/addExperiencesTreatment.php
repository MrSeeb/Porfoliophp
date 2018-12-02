<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/experiencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
restrictToUser();

if(!empty($_POST)) {

  //On appelle la fonction pour modifier les valeurs du produits
  if(addTravail($_POST, connectToDataBase()))
  {
    header("Location: experiences.php?success=Votre produit a bien été modifié");
    exit;
  }
  else {
    header("Location: addExperiences.php?&message=6");
    exit;
  }
}
else {
  header("Location: addExperiences.php?&message=0");
  exit;
}

 ?>