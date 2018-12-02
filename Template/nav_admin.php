<nav class="container navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">Bonjour <?php echo $_SESSION['user']['first_name']; ?> <i class="fas fa-angle-double-right"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?PHP
        if($pagename == "home")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="home.php">Accueil</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="home.php">Accueil</a></li>
          <?PHP
        }
        if($pagename == "travaux")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="experiences.php">Expériences</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="experiences.php">Expériences</a></li>
          <?PHP
        }
        if($pagename == "competences")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="competences.php">Compétences</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="competences.php">Compétences</a></li>
          <?PHP
        }
        if($pagename == "logoutadmin")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="logout.php">Se déconnecter</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>
          <?PHP
        }
        ?>
      </ul>
    </div>
  </nav>
  
  <main class="container mt-3">