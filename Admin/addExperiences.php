<?php
//On charge les fonctions d'accès aux produits
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/experiencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";

restrictToUser();

include "../Template/header.php";
?>
<section id="add" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="addExperiencesTreatment.php" method="post" class="container col-6 pt-3 pb-3">
        <div class="form-group">
            <label for="titre">Titre:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="form-group">
            <label for="description">Description:<span class="text-danger">*</span></label>
            <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="github">GitHub:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="github" name="github" required>
        </div>
        <div class="form-group">
            <label for="ghpage">GitHub Page:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ghpage" name="ghpage" required>
        </div>
        <input type="submit" class="btn btn-success" value="Ajouter">
        <span class="text-danger">* champs requis</span>
    </form>
</section>
<?php include "../Template/footer.php";?>