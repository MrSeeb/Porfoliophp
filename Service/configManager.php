<?php
function getConfig($db)
{
    $query = connectToDataBase()->query("SELECT * FROM config");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
    $query->CloseCursor();
}
//Fonction de déconnexion
function logout()
{
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php?success=Vous avez été déconnecté, à bientôt :)");
}
//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user)
{
    session_start();
    $_SESSION["user"] = $user;
}

//Fonction pour restreindre l'accès d'une page à un utilisateur authentifié
function restrictToUser()
{
    session_start();
    if(!isset($_SESSION["user"]) || empty($_SESSION["user"]))
    {
        header("Location: index.php?message=8");
        exit;
    }
}

//Function qui nettoie les entrées d'un formulaire
function clearForm($form)
{
    foreach ($form as $key => $value)
    {
        $form[$key] = htmlspecialchars($value);
    }
    return $form;
}

?>