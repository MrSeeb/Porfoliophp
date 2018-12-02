<?php
//Fonction pour récuperer les travaux stockés dans la db
function getTravaux($db)
{
    $query = connectToDataBase()->query("SELECT * FROM travaux");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
    $query->CloseCursor();
}

//Fonction pour modifier les valeurs d'un produit en base de données
function addTravail($form, $db)
{
    $query = connectToDataBase()->prepare('INSERT INTO travaux(titre, description, github, ghpage) VALUES(:titre, :description, :github, :ghpage)');
    $result = $query->execute([
        "titre" => $form["titre"],
        "description" => $form["description"],
        "github" => $form["github"],
        "ghpage" => $form["ghpage"]
    ]);
    return $result;
    $query->closeCursor();
}

//Fonction pour modifier les valeurs d'une question en base de données
function updateTravail($form, $db)
{
    $query = connectToDataBase()->prepare("UPDATE travaux SET id = :id, titre = :titre, description = :description, github = :github, ghpage = ghpage WHERE id = :id");
    $result = $query->execute([
        "id" => $form["id"],
        "titre" => $form["titre"],
        "description" => $form["description"],
        "github" => $form["github"],
        "ghpage" => $form["ghpage"]
    ]);
    return $result;
    $query->closeCursor();
}

//Fonction pour supprimer une question en base de données
function deleteTravail($id, $db)
{
    $query = connectToDataBase()->prepare("DELETE FROM travaux WHERE id = ?");
    $result = $query->execute([$id]);
    return $result;
    $query->closeCursor();
}

//Fonction pour récuperer 1 travail stocké dans la db
function getTravail($id,$db)
{
    $query = $db->prepare("SELECT * FROM travaux WHERE id = ?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
  $query->CloseCursor();
}

function lastID($db)
{
    $query = connectToDataBase()->query("SELECT LAST_INSERT_ID() FROM Image");
    $stuff = $query->fetch(PDO::FETCH_ASSOC);
    return $stuff;
}
?>