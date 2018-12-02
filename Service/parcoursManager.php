<?php
//Fonction qui récupère un seul produit de la DB sur la base de son id
function getParcours($db)
{
    $query = $db->query("SELECT * FROM parcours INNER JOIN Image ON parcours.titre = Image.image_name");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

//Fonction qui récupère un seul produit de la DB sur la base de son id
function getProjects($db)
{
    $query = $db->query("SELECT * FROM travaux INNER JOIN Image ON travaux.titre = Image.image_name");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
?>