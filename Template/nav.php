<nav class="container navbar navbar-expand-lg navbar-light bg-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?PHP
        if($pagename == "index")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Ma présentation</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Ma présentation</a></li>
          <?PHP
        }
        if($pagename == "parcours")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="parcours.php"><i class="fas fa-graduation-cap"></i> Mon parcours</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="parcours.php"><i class="fas fa-graduation-cap"></i> Mon parcours</a></li>
          <?PHP
        }
        if($pagename == "travaux")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="travaux.php"><i class="fas fa-briefcase"></i> Mes travaux</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="travaux.php"><i class="fas fa-briefcase"></i> Mes travaux</a></li>
          <?PHP
        }
        if($pagename == "contact")
        {
          ?>
          <li class="nav-item active"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Me contacter</a></li>
          <?PHP
        }
        else
        {
          ?>
          <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Me contacter</a></li>
          <?PHP
        }?>
      </ul>
    </div>
  </nav>
  
  <main class="container mt-3">