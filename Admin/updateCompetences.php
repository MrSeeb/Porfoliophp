<?php
//On charge les fonctions d'accès aux produits
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/competencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";

restrictToUser();

//On récupère le produit concerné en base de données
$id = htmlspecialchars($_GET["id"]);
$result = getCompetence($id,connectToDataBase());

include "../Template/header.php";
?>
<section id="update" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="updatecompetencesTreatment.php" method="post" class="container col-6 pt-3 pb-3">
    <?php if(!empty($result)) { ?>
        <input type="hidden" name ="id" value="<?php echo $result["id"]; ?>">
        <div class="form-group">
            <label for="competence">Compétence:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="competence" name="competence" value="<?php echo $result["competence"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="pourcentage">Pourcentage:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="pourcentage" name="pourcentage" value="<?php echo $result["pourcentage"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="categorie">Catégorie:</label>
            <select class="form-control" id="categorie" name="category">
                <option id="categorie" name="Développement" value="Développement">Développement</option>
                <option id="categorie" name="Hardware" value="Hardware">Hardware</option>
                <option id="categorie" name="Bureautique" value="Bureautique">Bureautique</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Mettre à jour">
        <span class="text-danger">* champs requis</span>
    </form>
    <?php }
    else {
      echo "<div class='alert alert-danger w-100 mx-auto'>Nous n'avons pas trouvé de produit dans notre base de données</div>";
    } ?>
</section>
<?php include "../Template/footer.php";?>
