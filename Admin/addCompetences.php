<?php

//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/competencesManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
restrictToUser();

include "../Template/header.php";
?>
<section id="add" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="addCompetencesTreatment.php" method="post" class="container col-6 pt-3 pb-3">
        <div class="form-group">
            <label for="titre">Compétence:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="competence" name="competence" required>
        </div>
        <div class="form-group">
            <label for="description">Pourcentage:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="pourcentage" name="pourcentage" required>
        </div>
        <div class="form-group">
            <label for="categorie">Catégorie:</label>
            <select class="form-control" id="categorie" name="category">
                <option id="categorie" name="Développement" value="Développement">Développement</option>
                <option id="categorie" name="Hardware" value="Hardware">Hardware</option>
                <option id="categorie" name="Bureautique" value="Bureautique">Bureautique</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Ajouter">
        <span class="text-danger">* champs requis</span>
    </form>
</section>
<?php include "../Template/footer.php";?>