<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
restrictToUser();
$id = htmlspecialchars($_GET["id"]);

if(!empty($_POST)) {

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateInfo($_POST, connectToDataBase()))
  {
    header("Location: home.php?success=Votre produit a bien été modifié");
    exit;
  }
  else {
    header("Location: updateGeneral.php?id=" . $_POST["id"] ."&message=6");
    exit;
  }
}
else {
  header("Location: updateGeneral.php?id=" . $_POST["id"] ."message=0");
  exit;
}

 ?>