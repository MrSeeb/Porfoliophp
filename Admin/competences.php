<?php 
$pagename = "competences";
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/competencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
//On restreint aux personnes authentifiées
restrictToUser();
include "../Template/header.php";
include "../Template/nav_admin.php";
$results = getCompetences(connectToDataBase());
?>
<div class="container pt-3 pb-3">
    <div class="col-12">
        <h2 class="text-center">Mes compétences informatique <a class="btn btn-success btn-sm" href="addCompetences.php" role="button">Ajouter une compétence</a></h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Compétence</th>
                    <th scope="col">Pourcentage</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
            <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($results as $key => $result)
            {
                ?>
                <tr>
                    <th scope="row"><?php echo $result["id"]; ?></th>
                    <td><?php echo $result["competence"]; ?></td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $result["pourcentage"]; ?>%;" aria-valuenow="<?php echo $result["pourcentage"]; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $result["pourcentage"]; ?>%</div>
                        </div>
                    </td>
                    <td><?php echo $result["category"]; ?></td>
                    <td>
                        <a href="updateCompetences.php?id=<?php echo $result["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a>
                        <a href="delCompetences.php?id=<?php echo $result["id"]; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "../Template/footer.php"; ?>