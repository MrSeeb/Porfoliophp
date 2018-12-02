<?php
function addImage($src,$name,$db)
{
    $query = $db->prepare("INSERT INTO Image (image_name,image_src) VALUES (? , ?)");
    $query->execute([$name,$src]);
}
?>