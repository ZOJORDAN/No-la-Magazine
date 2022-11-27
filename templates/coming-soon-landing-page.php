<!DOCTYPE html>
<html lang="fr">
    <!-- tab title + logo : head file inclusion -->
    <?php $title = "À VENIR";
    $filePath = "../assets/coming-soon-landing-page.css";
    include 'head.php'; ?>

    <body class="comingSoon">
        <!-- Bootstrap body inclusion -->
        <?php include 'bs-cdn-js.php'; ?>
        <p class="sctchDisp" id="logoFtSize">
            NO<span class="sctchDmedIt" id="logoFtSize">&</span>LA
            <p class="poppinsLite" id="announcement">ARRIVE BIENTÔT</p>
        </p>
        <br>
        <p class="poppinsLite" id="invitation">REÇOIS UNE NOTIFICATION POUR LE LANCEMENT</p><br>
        <input type="email" name="usermail" placeholder="Entre ton e-mail" class="poppinsReg form-control" size="40"><br><br>
        <input type="submit" value="VALIDER" class="poppinsReg btn btn-dark">
    </body>
</html>