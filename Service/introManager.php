<?php
//Fonction pour récuperer le paragraphe d'introduction stocké dans la db
function getIntros($db)
{
    $query = connectToDataBase()->query("SELECT * FROM intro");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
    $query->CloseCursor();
}

function getIntro($id,$db)
{
    $query = $db->prepare("SELECT * FROM intro WHERE id=?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
  $query->CloseCursor();
}

function updateIntro($form, $db)
{
    $query = connectToDataBase()->prepare("UPDATE intro SET id = :id, texte = :texte WHERE id = :id");
    $result = $query->execute([
        "id" => $form["id"],
        "texte" => $form["texte"]
    ]);
    return $result;
    $query->closeCursor();
}
?>