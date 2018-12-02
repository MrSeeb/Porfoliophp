<?php
$users = getInfos(connectToDataBase());
$configs = getConfig(connectToDataBase());
?>
    <!doctype html>
    <html class="no-js" lang="en"> 
      <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
        foreach ($users as $key => $user)
        {
          ?>
          <title><?php echo $user["titre"]; ?></title>
          <?php
        }
        ?>
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <?php foreach ($configs as $key => $config)
        {
          ?>
          <!-- CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
          <link rel="stylesheet" href="<?php echo $config['css']; ?>/main.css">
          <link rel="stylesheet" href="<?php echo $config['css']; ?>/normalize.css">
        </head>
        <?php
      }
      ?>
      <body>
        <?php
        foreach ($users as $key => $user)
        {
          ?>
          <header class="jumbotron jumbotron-fluid mb-0 pb-2 pt-2">
            <div class="container text-center">
              <h1 class="display-7"><?php echo $user["nom"]; ?> <?php echo $user["prenom"]; ?></h1>
              <p class="lead"><?php echo $user["titre"]; ?></p>
            </div>
          </header>
          <?php
        }
        ?>