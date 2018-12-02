<?php
function getInfo($id,$db)
{
    $query = $db->prepare("SELECT * FROM general WHERE id=?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
  $query->CloseCursor();
}

function updateInfo($form, $db)
{
    $query = connectToDataBase()->prepare("UPDATE general SET id = :id, nom = :nom, prenom = :prenom, titre = :titre, tel = :tel, mail = :mail, age = :age, permis = :permis, ville = :ville, twitter = :twitter, github = :github, linkedin = :linkedin WHERE id = :id");
    $result = $query->execute([
        "id" => $form["id"],
        "nom" => $form["nom"],
        "prenom" => $form["prenom"],
        "titre" => $form["titre"],
        "tel" => $form["tel"],
        "mail" => $form["mail"],
        "age" => $form["age"],
        "permis" => $form["permis"],
        "ville" => $form["ville"],
        "twitter" => $form["twitter"],
        "github" => $form["github"],
        "linkedin" => $form["linkedin"]
    ]);
    return $result;
    $query->closeCursor();
}
//Fonction pour récuperer les informations générales stockés dans la db
function getInfos($db)
{
    $query = connectToDataBase()->query("SELECT * FROM general");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
    $query->CloseCursor();
}
?>