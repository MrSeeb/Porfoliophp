<?php
//On charge les fichiers necessaires
require "../Model/db.php";
require "../Service/configManager.php";
require "../Service/introManager.php";
require "../Service/errorManager.php";
require "../Service/infoManager.php";

restrictToUser();

//On récupère le produit concerné en base de données
$id = htmlspecialchars($_GET["id"]);
$result = getIntro($id,connectToDataBase());

include "../Template/header.php";
?>
<section id="update" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="updateIntroTreatment.php" method="post" class="container col-6 pt-3 pb-3">
    <?php if(!empty($result)) { ?>
        <input type="hidden" name ="id" value="<?php echo $result["id"]; ?>">
        <div class="form-group">
            <label for="texte">Texte:<span class="text-danger">*</span></label>
            <textarea class="form-control" rows="5" id="texte" name="texte" required><?php echo $result["texte"]; ?></textarea>
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
