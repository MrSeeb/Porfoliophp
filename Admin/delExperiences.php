<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/experiencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
restrictToUser();

if(isset($_GET["id"])) {
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["id"]));

  //On appelle la fonction de suppression de produit
  if(deleteTravail($id, $db)) {
    header("Location: experiences.php?success=Votre produit a bien été supprimé");
    exit;
  }
  else {
    header("Location: experiences.php?message=6");
    exit;
  }
}
else{
  header("Location: experiences.php");
  exit;
}

 ?>
