<?php
//On charge le fichier avec les fonctions qui renvoient nos données
require "Model/db.php";
$reponses = connectToDataBAse()->query('SELECT * FROM user');
$reponse = $reponses->fetchall();
//On vérifie si le formulaire a été rempli
if(!empty($_POST))
{
  //On nettoie les entrées du formulaire
  foreach ($_POST as $key => $value)
  {
    $_POST[$key] = htmlspecialchars($value);
  }
  //On récupère les utilisateurs stockés
  foreach ($reponse as $key =>$user)
  {
    if($user["first_name"] === $_POST["first_name"] && $_POST["user_password"] === $user["password"])
    {
      //On démarre une session pour y stocker les informations de l'utilisateur
      session_start();
      $_SESSION["user"] = $user;
      header("Location: Admin/home.php");
      exit;
    }
  }
  header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
  exit;
}
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de connexion avec un message d'erreur
header("Location: index.php?message=Vous devez remplir les champs du formulaire");
exit;
?>