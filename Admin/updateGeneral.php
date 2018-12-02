<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";
//On récupère le produit concerné en base de données
$id = htmlspecialchars($_GET["id"]);
$result = getInfo($id,connectToDataBase());

include "../Template/header.php";
?>
<section id="update" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="updateGeneralTreatment.php" method="post" class="container col-6 pt-3 pb-3">
    <?php if(!empty($result)) { ?>
        <input type="hidden" name ="id" value="<?php echo $result["id"]; ?>">
        <div class="form-group">
            <label for="nom">Nom:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $result["nom"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $result["prenom"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="titre">Titre:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $result["titre"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="tel">Tél:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $result["tel"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="mail">Mail:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $result["mail"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="age">Âge:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="age" name="age" value="<?php echo $result["age"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="permis">Permis:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="permis" name="permis" value="<?php echo $result["permis"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="ville">Ville:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $result["ville"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $result["twitter"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="github">GitHub:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="github" name="github" value="<?php echo $result["github"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $result["linkedin"]; ?>" required>
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
