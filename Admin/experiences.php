<?php 
$pagename = "travaux";
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/experiencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
//On restreint aux personnes authentifiées
restrictToUser();
include "../Template/header.php";
include "../Template/nav_admin.php";
$results = getTravaux(connectToDataBase());
?>
<div class="container pt-3 pb-3">
    <div class="col-12">
        <h2 class="text-center">Mes expériences <a class="btn btn-success btn-sm" href="addExperiences.php" role="button">Ajouter une expérience</a></h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">GitHub</th>
                    <th scope="col">GitHub Page</th>
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
                    <td><?php echo $result["titre"]; ?></td>
                    <td><?php echo $result["description"]; ?></td>
                    <td><a href="<?php echo $result["github"]; ?>"><?php echo $result["github"]; ?></td>
                    <td><a href="<?php echo $result["ghpage"]; ?>"><?php echo $result["ghpage"]; ?></td>
                    <td>
                        <a href="updateExperiences.php?id=<?php echo $result["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a>
                        <a href="delExperiences.php?id=<?php echo $result["id"]; ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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