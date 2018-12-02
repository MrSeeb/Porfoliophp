<?php
require "Model/db.php";
require "Service/sessionManager.php";
$user = getInfos(connectToDataBase());
if(!empty($_POST))
{
    //On sécurise les entrées du formulaire
    $_POST = clearForm($_POST);

    //On vérifie que le champs mail contient bien un email
    $email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);

    // Le message
    $message = $_POST["message"];
    
    // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
    $message = wordwrap($message, 50, "\r\n");


    // Envoi du mail
    //mail($myMail, 'Message envoyé depuis le PortFolio', $message);

    var_dump($email);
    var_dump($user["mail"]);
    var_dump($message);
}
else
{
    //header("Location: contact.php?message=0");
    exit;
}

?>