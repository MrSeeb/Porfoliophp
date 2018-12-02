<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/experiencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";

restrictToUser();
$id = htmlspecialchars($_GET["id"]);

if(!empty($_POST)) {

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateTravail($_POST, connectToDataBase()))
  {
    header("Location: experiences.php?success=Votre produit a bien été modifié");
    exit;
  }
  else {
    header("Location: updateExperiences.php?id=" . $_POST["id"] ."&message=6");
    exit;
  }
}
else {
  header("Location: updateExperiences.php?id=" . $_POST["id"] ."message=0");
  exit;
}

 ?>