<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/infoManager.php";
require "../Service/errorManager.php";
//On charge le header
include "../Template/header.php";
//On charge le formulaire de connexion
displayMessages();
include "../Template/Forms/formConnectionAdmin.php";
//On charge le footer
include "../Template/footer.php";
?>