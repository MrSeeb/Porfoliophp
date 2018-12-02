<?php
$pagename = "contact";
require "Model/db.php";
require "Service/configManager.php";
require "Service/infoManager.php";
require "Service/errorManager.php";
include "Template/header.php";
include "Template/nav.php";
?>
<section id="contact" class="container pt-3 p-3">
    <?php displayMessages();?>
    <form action="contactTreatment.php" method="post" class="container col-6 pt-3 pb-3">
        <div class="form-group">
            <label for="name">Votre nom:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="mail">Votre email:<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="mail" placeholder="Votre mail" required>
        </div>
        <div class="form-group">
            <label for="message">Votre message:<span class="text-danger">*</span></label>
            <textarea class="form-control" rows="5" id="message" placeholder="Votre message" required></textarea>
        </div>
        <input type="submit" class="btn btn-info" value="Envoyer">
        <span class="text-danger">* champs requis</span>
    </form>
</section>
<?php include "Template/footer.php";?>