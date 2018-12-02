<?php
function connectToDataBase()
{
  try{
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'phpmyadmin', 'root');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}
?>