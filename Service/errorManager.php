<?php
//Function qui renvoi le tableau contenant les messages d'erreur avec leurs indexes
function getReferences() {
  return [
    "0" => "Il faut remplir le formulaire",
    "1" => "Certains champs sont vides",
    "2" => "L'édudiant a bien été crée mais. Un problème est survenu lors de l'enregistrement de la session merci de réessayer",
    "3" => "Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe",
    "4" => "Nous n'avons aucune session de test avec ce nom et code de session",
    "5" => "Il faut vous identifier pour accéder au contenu",
    "6" => "La présence d'un mail ou d'un telphone est obligatoire",
    "7" => "l'etudiant et la session test  n'ont pas été créés",
    "8" => "Le nom et le prenom doivent être renseignés",
    "9" => "Le numero de telephone doit contenir 10 chiffres"
  ];
}


//Fonction qui sur la base d'une chaine de codes erreur renvoi les messages correspondants
function getErrorMessages($codes) {
  //Tableau associant codes et messages
  $references = getReferences();
  //Démarrage standard du message
  $message = "Nous avons trouvé les erreurs suivantes : ";
  //Sécurisation de l'argument
  $codes  = htmlspecialchars($codes);
  //On boucle sur la string et on ajoute à $message les message associés au code erreur
  for ($i=0; $i < strlen($codes) ; $i++) {
    $message .= "<p>" . $references[$codes[$i]] . "</p>";
  }
  //On renvoi le message fini
  return $message;
}

//Function globale pour capter les messages qu'ils soient d'erreur ou de succes
function getMessages() {
  $result = [];
  //Si une confirmation de succès
  if(isset($_GET["success"])) {
    $success = htmlspecialchars($_GET["success"]);
    $result["success"] = $success;
  }
  //Si un on a une ou des erreurs
  if(isset($_GET["message"])) {
    $code = htmlspecialchars($_GET["message"]);
    $error = getErrorMessages($code);
    $result["error"] = $error;
  }
  return $result;
}

//Fonction qui affiche les message en rouge ou vert selon leur nature
function displayMessages() {
  $messages = getMessages();
  foreach ($messages as $key => $message) {
    if($key === "success") {
      echo "<div class='alert alert-success w-50 mx-auto'>" . $message . "</div>";
    }
    else {
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
    }
  }
}

 ?>
