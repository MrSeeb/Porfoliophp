<?php
$pagename = "index";
require "Model/db.php";
require "Service/configManager.php";
require "Service/infoManager.php";
require "Service/introManager.php";
require "Service/errorManager.php";
//On charge les fichiers necessaires
include "Template/header.php";
include "Template/nav.php";
$results = getInfos(connectToDataBase());
$intros = getIntros(connectToDataBase());
?>
<div class="container pt-3 pb-3">
    <div class="col-12 row">
        <div class="col-6">
        <h2 class="titre-intro text-center category">Introduction</h2>
            <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($intros as $key => $intro)
            {
                ?>
                <p class="text-intro font-weight-bold"><?php echo nl2br($intro["texte"]);?></p>
                <?php 
            } ?>
        </div>
        <div class="col-6">
            <h2 class="text-center titre-intro category">Informations générales</h2>
            <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($results as $key => $result)
            {
                ?>
                <ul class="list-group">
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-id-card"></i> <?php echo $result["nom"];?> <?php echo $result["prenom"];?></li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-laptop-code"></i> <?php echo $result["titre"];?></li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-mobile"></i> <a href="tel:<?php echo $result["tel"];?>"><?php echo $result["tel"];?></a></li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-envelope-open"></i> <a href="mailto:<?php echo $result["mail"];?>"><?php echo $result["mail"];?></a></li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-car"></i> <?php echo $result["permis"]; ?></li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-birthday-cake"></i> <?php echo $result["age"];?> ans</li>
                    <li class="list-group-item text-intro font-weight-bold"><i class="fas fa-home"></i> <?php echo $result["ville"];?></li>
                </ul>
        </div>
    </div>
</div>
<hr class="my-4">
<div class="box pb-3">
    <div class="container">
        <h2 class="titre-intro text-center category">Liens Professionnels</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <a href="https://twitter.com/<?php echo $result["twitter"];?>"><i class="fab fa-twitter fa-3x"></i></a>
                </div>
			</div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <a href="https://github.com/<?php echo $result["github"];?>"><i class="fab fa-github fa-3x"></i></a>
                </div>
			</div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <a href="https://www.linkedin.com/in/<?php echo $result["linkedin"];?>"><i class="fab fa-linkedin fa-3x"></i></a>
				</div>
            </div>
            <?php } ?>
		</div>		
    </div>
</div>

<?php include "Template/footer.php"; ?>