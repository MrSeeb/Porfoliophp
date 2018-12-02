<?php

//Fonction pour récuperer les compétences stockés dans la db
function getCompetences($db)
{
    $query = connectToDataBase()->query("SELECT * FROM competences");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
    $query->CloseCursor();
}
//Fonction pour récuperer 1 travail stocké dans la db
function getCompetence($id,$db)
{
    $query = $db->prepare("SELECT * FROM competences WHERE id=?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
  $query->CloseCursor();
}

function addCompetences($form, $db)
{
    $query = connectToDataBase()->prepare('INSERT INTO competences(competence, pourcentage, category) VALUES(:competence, :pourcentage, :category)');
    $result = $query->execute([
        "competence" => $form["competence"],
        "pourcentage" => $form["pourcentage"],
        "category" => $form["category"]
    ]);
    return $result;
    $query->closeCursor();
}

function updateCompetences($form, $db)
{
    $query = connectToDataBase()->prepare("UPDATE competences SET id = :id, competence = :competence, pourcentage = :pourcentage, category = :category WHERE id = :id");
    $result = $query->execute([
        "id" => $form["id"],
        "competence" => $form["competence"],
        "pourcentage" => $form["pourcentage"],
        "category" => $form["category"]
    ]);
    return $result;
    $query->closeCursor();
}

//Fonction pour supprimer une question en base de données
function deleteCompetences($id, $db)
{
    $query = connectToDataBase()->prepare("DELETE FROM competences WHERE id = ?");
    $result = $query->execute([$id]);
    return $result;
    $query->closeCursor();
}
?>