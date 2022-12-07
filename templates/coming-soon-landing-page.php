<!DOCTYPE html>
<html lang="fr">
    
    <?php include 'head-elements/main-head.php'; ?>
    <?php include 'head-elements/head-toggle.php'; ?>
    <?php include 'head-elements/head-coming-soon.php'; ?>

    <body class="comingSoon">
        <!-- Bootstrap body inclusion -->
        <?php include 'bs-cdn-js.php'; ?>

        <!-- toggle inclusion -->
        <?php include 'toggle.php'; ?>

        <p class="sctchDisp" id="logoFtSize">
            NO<span class="sctchDmedIt" id="logoFtSize">&</span>LA
            <p class="poppinsLite" id="announcement">ARRIVE BIENTÔT</p>
        </p>
        <br>
        <p class="poppinsLite" id="invitation">REÇOIS UNE NOTIFICATION POUR LE LANCEMENT</p><br>
        <input type="email" name="usermail" placeholder="Entre ton e-mail" class="
        poppinsReg form-control" size="40"><br>
        <input type="submit" value="VALIDER" class="poppinsReg btn btn-dark">
    </body>
</html>