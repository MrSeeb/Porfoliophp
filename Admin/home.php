<?php
$pagename = "home";
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/infoManager.php";
require "../Service/introManager.php";
require "../Service/errorManager.php";
//On restreint aux personnes authentifiées
restrictToUser();
include "../Template/header.php";
include "../Template/nav_admin.php";
$results = getInfos(connectToDataBase());
$intros = getIntros(connectToDataBase());
?>
<div class="container pt-3 pb-3">
    <div class="col-12 row">
        <div class="col-6">
        <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($intros as $key => $intro)
            {
                ?>
                <h2 class="titre-intro text-center">Introduction <a class="btn btn-outline-info btn-sm" href="updateIntro.php?id=<?php echo $intro["id"]; ?>" role="button">Modifier</a></h2>
                <p class="text-intro font-weight-bold"><?php echo nl2br($intro["texte"]);?></p>
                <?php 
            } ?>
        </div>
        <div class="col-6">
            <h2 class="text-center">Informations générales <a class="btn btn-outline-info btn-sm" href="updateGeneral.php?id=<?php echo $intro["id"]; ?>" role="button">Modifier</a></h2>
            <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($results as $key => $result)
            {
                ?>
                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-id-card"></i> <?php echo $result["nom"];?> <?php echo $result["prenom"];?></li>
                    <li class="list-group-item"><i class="fas fa-graduation-cap"></i> <?php echo $result["titre"];?></li>
                    <li class="list-group-item"><i class="fas fa-phone-volume"></i> <?php echo $result["tel"];?></li>
                    <li class="list-group-item"><i class="fas fa-envelope-open"></i> <?php echo $result["mail"];?></li>
                    <li class="list-group-item"><i class="fas fa-birthday-cake"></i> <?php echo $result["age"];?> ans</li>
                    <li class="list-group-item"><i class="fas fa-home"></i> <?php echo $result["ville"];?></li>
                </ul>
                <?php 
            } ?>
        </div>
    </div>
</div>

<?php include "../Template/footer.php"; ?>